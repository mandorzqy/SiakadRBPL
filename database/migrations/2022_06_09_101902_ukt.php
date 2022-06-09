<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UKT extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ukt', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('nrp');
            $table->string('periode');
            $table->date('tanggal');
            $table->string('total');
            $table->string('tagihan1');
            $table->string('tagihan2');
            $table->string('tagihan3');
            $table->string('tagihan4');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ukt');
    }
}
