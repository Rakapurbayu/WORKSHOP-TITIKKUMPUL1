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
        Schema::create('vendor', function (Blueprint $table) {
            $table->string('ID_USER', 8)->primary();
            $table->string('USERNAME', 18);
            $table->string('PASSWORD', 18);
            $table->string('ROLE', 1);
            $table->string('NAMA_VENDOR', 30);
            $table->string('ALAMAT_VENDOR', 50);
            $table->string('NO_TELP_VENDOR', 20);
            $table->string('DESKRIPSI_VENDOR', 500);
            $table->binary('FOTO_VENDOR');
            $table->longText('PROMO_VENDOR');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendor');
    }
};
