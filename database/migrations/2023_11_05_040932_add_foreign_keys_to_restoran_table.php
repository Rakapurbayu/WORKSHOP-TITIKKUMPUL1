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
        Schema::table('restoran', function (Blueprint $table) {
            $table->foreign(['ID_PROMO'], 'FK_RESTORAN_RELATIONS_PROMO')->references(['ID_PROMO'])->on('promo');
            $table->foreign(['ID_REVIEW'], 'FK_RESTORAN_RELATIONS_REVIEW')->references(['ID_REVIEW'])->on('review');
            $table->foreign(['ID_USER'], 'FK_RESTORAN_RELATIONS_USER')->references(['ID_USER'])->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('restoran', function (Blueprint $table) {
            $table->dropForeign('FK_RESTORAN_RELATIONS_PROMO');
            $table->dropForeign('FK_RESTORAN_RELATIONS_REVIEW');
            $table->dropForeign('FK_RESTORAN_RELATIONS_USER');
        });
    }
};
