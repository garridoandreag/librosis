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
        Schema::table('movimiento', function (Blueprint $table) {
            $table->foreign(['id_cliente'], 'FK_MOV_CLIENTE')->references(['id_cliente'])->on('cliente')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['id_compra'], 'FK_MOV_COMPRA')->references(['id_orden_compra'])->on('orden_compra')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['id_compra_detalle'], 'FK_MOV_COMPRAD')->references(['id_orden_compraDetalle'])->on('orden_compra_detalle')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['id_libro'], 'FK_MOV_LIBRO')->references(['id_libro'])->on('libro')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['id_proveedor'], 'FK_MOV_PROVEEDOR')->references(['id_proveedor'])->on('proveedor')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['id_venta'], 'FK_MOV_VENTA')->references(['id_pedido_venta'])->on('pedido_venta')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['id_venta_detalle'], 'FK_MOV_VENTAD')->references(['id_pedido_venta_detalle'])->on('pedido_venta_detalle')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('movimiento', function (Blueprint $table) {
            $table->dropForeign('FK_MOV_CLIENTE');
            $table->dropForeign('FK_MOV_COMPRA');
            $table->dropForeign('FK_MOV_COMPRAD');
            $table->dropForeign('FK_MOV_LIBRO');
            $table->dropForeign('FK_MOV_PROVEEDOR');
            $table->dropForeign('FK_MOV_VENTA');
            $table->dropForeign('FK_MOV_VENTAD');
        });
    }
};
