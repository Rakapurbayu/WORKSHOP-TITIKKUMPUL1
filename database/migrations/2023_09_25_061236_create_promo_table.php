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
        Schema::create('promo', function (Blueprint $table) {
            $table->id();
            $table->date('created_at');
            $table->date('end_at');
            $table->string('nama_promo', 20);
            $table->string('desc_promo', 100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promo');
    }
};
