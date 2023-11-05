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
        Schema::create('promo', function (Blueprint $table) {
            $table->string('ID_PROMO', 8)->primary();
            $table->string('ID_RESERVASI', 10)->nullable();
            $table->string('NAMA_PROMO', 30);
            $table->string('DESKRIPSI_PROMO', 500);
            $table->timestamp('TANGGAL_PROMO');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('promo');
    }
};
