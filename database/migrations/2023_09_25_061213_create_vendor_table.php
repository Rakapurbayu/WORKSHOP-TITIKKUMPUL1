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
        Schema::create('vendor', function (Blueprint $table) {
            $table->id();
            $table->string('nama_vendor',30 );
            $table->string('alamat_vendor',30 );
            $table->string('no_tlp_vendor',15 );
            $table->string('desc_vendor',500 );
            $table->binary('data');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendor');
    }
};
