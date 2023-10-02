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
        Schema::table('restoran', function (Blueprint $table) {
            $table->unsignedBigInteger('id_restoran');
            $table->foreign('id_restoran')->references('id')->on('restoran');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('restoran', function (Blueprint $table) {
            $table->foreignId('reservasi_restoran_id_foreign');
            $table->dropForeign('reservasi_restoran_id_foreign');
        });
    }
};
