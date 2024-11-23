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
        Schema::table('permiso_usuario', function (Blueprint $table) {
            $table->foreign(['id_permiso'], 'FK_PERMISO_PERMISOUSUARIO')->references(['id_permiso'])->on('permiso')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['id_usuario'], 'FK_USUARIO_PERMISOUSUARIO')->references(['id'])->on('users')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('permiso_usuario', function (Blueprint $table) {
            $table->dropForeign('FK_PERMISO_PERMISOUSUARIO');
            $table->dropForeign('FK_USUARIO_PERMISOUSUARIO');
        });
    }
};
