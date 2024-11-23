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
        Schema::table('rol_usuario', function (Blueprint $table) {
            $table->foreign(['id_rol'], 'FK_ROL_ROLUSUARIO')->references(['id_rol'])->on('rol')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['id_usuario'], 'FK_USUARIO_ROLUSUARIO')->references(['id'])->on('users')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rol_usuario', function (Blueprint $table) {
            $table->dropForeign('FK_ROL_ROLUSUARIO');
            $table->dropForeign('FK_USUARIO_ROLUSUARIO');
        });
    }
};
