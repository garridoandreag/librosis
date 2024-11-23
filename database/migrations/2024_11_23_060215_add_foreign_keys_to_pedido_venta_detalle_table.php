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
        Schema::table('pedido_venta_detalle', function (Blueprint $table) {
            $table->foreign(['id_libro'], 'FK_LIBRO_VENTA')->references(['id_libro'])->on('libro')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['id_pedido_venta'], 'FK_PEDIDOVENTA')->references(['id_pedido_venta'])->on('pedido_venta')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pedido_venta_detalle', function (Blueprint $table) {
            $table->dropForeign('FK_LIBRO_VENTA');
            $table->dropForeign('FK_PEDIDOVENTA');
        });
    }
};
