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
        DB::statement('CREATE TABLE IF NOT EXISTS `librosis`.`RolUsuario` (
                `idRol` INT NULL AUTO_INCREMENT,
                `idUsuario` bigint unsigned NULL,
                INDEX `FK_ROL_ROLUSUARIO_idx` (`idRol` ASC) VISIBLE,
                INDEX `FK_USUARIO_ROLUSUARIO_idx` (`idUsuario` ASC) VISIBLE,
                CONSTRAINT `FK_ROL_ROLUSUARIO`
                    FOREIGN KEY (`idRol`)
                    REFERENCES `librosis`.`Rol` (`idRol`)
                    ON DELETE NO ACTION
                    ON UPDATE NO ACTION,
                CONSTRAINT `FK_USUARIO_ROLUSUARIO`
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
        Schema::dropIfExists('rolusuario');
    }
};
