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
        Schema::create('cliente', function (Blueprint $table) {
            $table->integer('id_cliente', true);
            $table->string('nombre', 45);
            $table->string('apellido', 45);
            $table->set('tipo', ['Empresa', 'Persona']);
            $table->string('nit', 20)->nullable()->unique('nit_unique');
            $table->string('correo_electronico', 45)->nullable();
            $table->string('direccion', 45)->nullable();
            $table->string('ciudad', 45)->nullable();
            $table->string('pais', 45)->nullable();
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
        Schema::dropIfExists('cliente');
    }
};
