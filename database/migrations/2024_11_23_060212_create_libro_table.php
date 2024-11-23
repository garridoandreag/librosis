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
        Schema::create('libro', function (Blueprint $table) {
            $table->integer('id_libro', true)->unique('id_libro_unique');
            $table->string('isbn', 20)->nullable()->unique('isbn_unique');
            $table->string('titulo', 50);
            $table->integer('id_genero')->index('id_genero_idx');
            $table->string('sinopsis', 200)->nullable();
            $table->decimal('precio', 2, 0)->nullable();
            $table->date('fecha_publicacion')->nullable();
            $table->string('imagen', 200)->nullable();
            $table->set('idioma', ['ES', 'EN', 'OTRO']);
            $table->set('estado', ['ACTIVO', 'INACTIVO']);
            $table->timestamp('fecha_creacion')->nullable();
            $table->timestamp('fecha_modificacion')->nullable();

            $table->primary(['id_libro']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libro');
    }
};
