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
        Schema::table('konsumer', function (Blueprint $table) {
            $table->foreign(['ID_USER'], 'FK_KONSUMER_INHERITAN_USER')->references(['ID_USER'])->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('konsumer', function (Blueprint $table) {
            $table->dropForeign('FK_KONSUMER_INHERITAN_USER');
        });
    }
};
