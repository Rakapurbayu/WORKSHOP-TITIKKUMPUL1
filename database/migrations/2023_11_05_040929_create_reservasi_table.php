<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservasi', function (Blueprint $table) {
            $table->id('ID_RESERVASI'); // This creates an auto-incrementing primary key
            $table->string('ID_USER', 8)->index('FK_RESERVAS_RELATIONS_USER');
            $table->string('ID_PROMO', 8)->nullable()->index('FK_RESERVAS_RELATIONS_PROMO');
            $table->string('ID_RESTORAN', 8)->nullable()->index('FK_RESERVAS_RELATIONS_RESTORAN');
            $table->date('TANGGAL_RESERVASI');
            $table->time('WAKTU_RESERVASI');
            $table->integer('JUMLAH_ORANG');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservasi');
    }
};
