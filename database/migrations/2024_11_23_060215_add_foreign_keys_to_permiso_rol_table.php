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
        Schema::table('permiso_rol', function (Blueprint $table) {
            $table->foreign(['id_permiso'], 'FK_PERMISO_PERMISOROL')->references(['id_permiso'])->on('permiso')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['id_rol'], 'FK_ROL_PERMISOROL')->references(['id_rol'])->on('rol')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('permiso_rol', function (Blueprint $table) {
            $table->dropForeign('FK_PERMISO_PERMISOROL');
            $table->dropForeign('FK_ROL_PERMISOROL');
        });
    }
};
