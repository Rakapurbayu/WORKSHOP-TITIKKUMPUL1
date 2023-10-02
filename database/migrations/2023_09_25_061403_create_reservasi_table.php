<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reservasi', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_reservasi');
            $table->time('waktu_reservasi');
            $table->integer('jumlah_orang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservasi');
    }
};
