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

            DB::statement('CREATE TABLE IF NOT EXISTS librosis.Permiso (
                idPermiso INT NOT NULL AUTO_INCREMENT,
                Nombre VARCHAR(45) NULL,
                Descripcion VARCHAR(200) NULL,
                Estado SET("ACTIVO", "INACTIVO") NULL,
                FechaCreacion TIMESTAMP NULL,
                FechaModificacion TIMESTAMP NULL,
                PRIMARY KEY (idPermiso))
                ENGINE = InnoDB;');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permiso');
    }
};
