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
        Schema::create('permiso_usuario', function (Blueprint $table) {
            $table->integer('id_permiso')->nullable()->index('fk_permiso_permisousuario_idx');
            $table->unsignedBigInteger('id_usuario')->nullable()->index('fk_usuario_permisousuario_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permiso_usuario');
    }
};
