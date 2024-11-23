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
        Schema::create('movimiento', function (Blueprint $table) {
            $table->integer('id_movimiento', true);
            $table->integer('id_venta')->nullable()->index('fk_mov_venta_idx');
            $table->integer('id_venta_detalle')->nullable()->index('fk_mov_ventad_idx');
            $table->integer('cantidadSalida')->nullable();
            $table->integer('id_cliente')->nullable()->index('fk_mov_cliente_idx');
            $table->integer('id_compra')->nullable()->index('fk_mov_compra_idx');
            $table->integer('id_compra_detalle')->nullable()->index('fk_mov_comprad_idx');
            $table->integer('id_libro')->index('fk_mov_libro_idx');
            $table->integer('cantidad_entrada');
            $table->integer('id_proveedor')->nullable()->index('fk_mov_proveedor_idx');
            $table->decimal('precio_unitario', 2, 0);
            $table->decimal('precio_total', 2, 0)->nullable();
            $table->string('usuario', 45)->nullable();
            $table->timestamp('fecha_creacion')->nullable();
            $table->timestamp('fecha_modificacion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimiento');
    }
};
