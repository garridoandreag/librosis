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
        DB::statement('CREATE TABLE IF NOT EXISTS `librosis`.`PermisoRol` (
            `idPermiso` INT NULL,
            `idRol` INT NULL,
            INDEX `FK_PERMISO_PERMISOROL_idx` (`idPermiso` ASC) VISIBLE,
            INDEX `FK_ROL_PERMISOROL_idx` (`idRol` ASC) VISIBLE,
            CONSTRAINT `FK_PERMISO_PERMISOROL`
                FOREIGN KEY (`idPermiso`)
                REFERENCES `librosis`.`Permiso` (`idPermiso`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION,
            CONSTRAINT `FK_ROL_PERMISOROL`
                FOREIGN KEY (`idRol`)
                REFERENCES `librosis`.`Rol` (`idRol`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION)
            ENGINE = InnoDB;');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permisoRol');
    }
};
