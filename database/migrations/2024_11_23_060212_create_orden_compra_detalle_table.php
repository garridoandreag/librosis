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
        Schema::create('orden_compra_detalle', function (Blueprint $table) {
            $table->integer('id_orden_compraDetalle', true);
            $table->integer('id_orden_compra')->index('fk_orden_compra_idx');
            $table->integer('id_libro')->index('fk_libro_idx');
            $table->integer('cantidad');
            $table->decimal('precio_unitario', 2, 0);
            $table->decimal('precio_total', 2, 0);
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
        Schema::dropIfExists('orden_compra_detalle');
    }
};
