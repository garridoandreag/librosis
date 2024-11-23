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
        Schema::create('pedido_venta_detalle', function (Blueprint $table) {
            $table->integer('id_pedido_venta_detalle', true);
            $table->integer('id_pedido_venta')->index('fk_pedidoventa_idx');
            $table->integer('id_libro')->index('fk_libro_pedido_idx');
            $table->integer('cantidad');
            $table->decimal('precio', 2, 0);
            $table->decimal('precio_total', 2, 0)->nullable();
            $table->timestamp('fecha_creacion')->nullable();
            $table->timestamp('fecha_modificacion')->nullable();
            $table->string('usuario', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedido_venta_detalle');
    }
};
