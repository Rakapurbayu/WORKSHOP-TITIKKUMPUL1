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
        Schema::create('admin', function (Blueprint $table) {
            $table->string('ID_USER', 8)->primary();
            $table->string('USERNAME', 18);
            $table->string('PASSWORD', 18);
            $table->string('ROLE', 1);
            $table->string('NAMA_ADMIN', 30);
            $table->string('NO_TELP_ADMIN', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin');
    }
};
