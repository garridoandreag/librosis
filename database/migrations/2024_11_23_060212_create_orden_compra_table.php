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
        Schema::create('orden_compra', function (Blueprint $table) {
            $table->integer('id_orden_compra', true);
            $table->integer('id_proveedor')->index('id_proveedor_idx');
            $table->timestamp('fecha_creacion')->nullable();
            $table->timestamp('fecha_modificacion')->nullable();
            $table->decimal('total', 2, 0)->nullable();
            $table->date('fecha_entrega')->nullable();
            $table->set('estado', ['PENDIENTE', 'RECIBIDO', 'CANCELADO']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orden_compra');
    }
};
