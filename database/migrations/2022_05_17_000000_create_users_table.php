<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('major_id');
            $table->foreignId('major_id')->constrained('majors');
            $table->foreignId('lecturer_id')->constrained('lecturers')->default(1);

            // $table->foreign('major_id')->references('id')->on('majors');
            $table->string('name');
            $table->boolean('status_frs')->default(false);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->default('password123');
            $table->bigInteger('nrp');
            $table->string('address');
            $table->integer('generation');
            $table->integer('type')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
