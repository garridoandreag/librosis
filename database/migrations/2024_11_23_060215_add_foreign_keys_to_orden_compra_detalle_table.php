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
        Schema::table('orden_compra_detalle', function (Blueprint $table) {
            $table->foreign(['id_libro'], 'FK_LIBRO_COMPRA')->references(['id_libro'])->on('libro')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['id_orden_compra'], 'FK_orden_compra')->references(['id_orden_compra'])->on('orden_compra')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orden_compra_detalle', function (Blueprint $table) {
            $table->dropForeign('FK_LIBRO_COMPRA');
            $table->dropForeign('FK_orden_compra');
        });
    }
};
