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
        Schema::create('proveedor', function (Blueprint $table) {
            $table->integer('id_proveedor', true);
            $table->string('nombre', 45);
            $table->string('persona_contacto', 45)->nullable();
            $table->string('numero_telefonico', 45)->nullable();
            $table->string('email', 45)->nullable();
            $table->string('direccion', 200)->nullable();
            $table->string('ciudad', 45)->nullable();
            $table->string('pais', 45)->nullable();
            $table->string('codigo_postal', 45)->nullable();
            $table->set('estado', ['ACTIVO', 'INACTIVO']);
            $table->timestamp('fecha_creacion')->nullable();
            $table->timestamp('fecha_modificacion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedor');
    }
};
