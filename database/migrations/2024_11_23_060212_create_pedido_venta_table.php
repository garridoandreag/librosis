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
        Schema::create('pedido_venta', function (Blueprint $table) {
            $table->integer('id_pedido_venta', true);
            $table->integer('id_cliente')->index('fk_cliente_idx');
            $table->decimal('monto_total', 2, 0)->nullable();
            $table->set('metodo_pago', ['TARJETA', 'EFECTIVO', 'TARJETA DE REGALO', 'CREDITO'])->nullable();
            $table->set('estado', ['PROCESANDO', 'COMPLETADO', 'CANCELADO']);
            $table->timestamp('fecha_creacion')->nullable();
            $table->timestamp('fecha_modificacion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedido_venta');
    }
};
