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
        Schema::create('registrasi', function (Blueprint $table) {
            $table->id()->unique;
            $table->timestamps();
            $table->string('nama', 50);
            $table->char('username', 19);
            $table->string('password', 15);
            
        });  
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrasi');
    }
};
