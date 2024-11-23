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
        Schema::table('orden_compra', function (Blueprint $table) {
            $table->foreign(['id_proveedor'], 'FK_Proveedor')->references(['id_proveedor'])->on('proveedor')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orden_compra', function (Blueprint $table) {
            $table->dropForeign('FK_Proveedor');
        });
    }
};
