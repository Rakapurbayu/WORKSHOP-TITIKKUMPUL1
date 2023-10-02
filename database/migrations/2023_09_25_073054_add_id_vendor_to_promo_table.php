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
        Schema::table('promo', function (Blueprint $table) {
            $table->unsignedBigInteger('id_vendor');
            $table->foreign('id_vendor')->references('id')->on('promo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('promo', function (Blueprint $table) {
            $table->foreignId('vendor_promo_id_foreign');
            $table->dropForeign('vendor_promo_id_foreign');
        });
    }
};
