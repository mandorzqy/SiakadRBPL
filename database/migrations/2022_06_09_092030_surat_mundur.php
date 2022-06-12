<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SuratMundur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surat_mundur', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('nrp');
            $table->string('tipe');
            $table->string('periode');
            $table->string('alasan');
            $table->string('bahasa');
            $table->boolean('status')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surat_mundur');
    }
}
