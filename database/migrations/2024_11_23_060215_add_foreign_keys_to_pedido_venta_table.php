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
        Schema::table('pedido_venta', function (Blueprint $table) {
            $table->foreign(['id_cliente'], 'FK_CLIENTE')->references(['id_cliente'])->on('cliente')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pedido_venta', function (Blueprint $table) {
            $table->dropForeign('FK_CLIENTE');
        });
    }
};
