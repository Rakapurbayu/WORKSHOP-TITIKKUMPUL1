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
        Schema::create('registrasi', function (Blueprint $table) {
            $table->char('ID_REGIS', 12)->primary();
            $table->string('ID_USER', 8)->index('FK_REGISTRA_RELATIONS_USER');
            $table->date('TANGGAL_REGIS');
            $table->string('USERNAME', 18);
            $table->string('PASSWORD', 18);
            $table->string('NAME', 30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registrasi');
    }
};
