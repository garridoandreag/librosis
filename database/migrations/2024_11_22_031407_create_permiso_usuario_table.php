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
        DB::statement('CREATE TABLE IF NOT EXISTS `librosis`.`PermisoUsuario` (
                `idPermiso` INT NULL,
                `idUsuario` bigint unsigned NULL,
                INDEX `FK_PERMISO_PERMISOUSUARIO_idx` (`idPermiso` ASC) VISIBLE,
                INDEX `FK_USUARIO_PERMISOUSUARIO_idx` (`idUsuario` ASC) VISIBLE,
                CONSTRAINT `FK_PERMISO_PERMISOUSUARIO`
                    FOREIGN KEY (`idPermiso`)
                    REFERENCES `librosis`.`Permiso` (`idPermiso`)
                    ON DELETE NO ACTION
                    ON UPDATE NO ACTION,
                CONSTRAINT `FK_USUARIO_PERMISOUSUARIO`
                    FOREIGN KEY (`idUsuario`)
                    REFERENCES `librosis`.`users` (`id`)
                    ON DELETE NO ACTION
                    ON UPDATE NO ACTION)
                ENGINE = InnoDB;');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permisoUsuario');
    }
};
