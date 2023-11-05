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
        Schema::create('restoran', function (Blueprint $table) {
            $table->string('ID_RESTORAN', 8)->primary();
            $table->string('ID_USER', 8)->index('FK_RESTORAN_RELATIONS_USER');
            $table->string('ID_PROMO', 8)->nullable()->index('FK_RESTORAN_RELATIONS_PROMO');
            $table->string('ID_REVIEW', 8)->nullable()->index('FK_RESTORAN_RELATIONS_REVIEW');
            $table->string('NAMA_RESTORAN', 30);
            $table->string('MENU', 30);
            $table->longText('DESKRIPSI');
            $table->string('LOKASI', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restoran');
    }
};
