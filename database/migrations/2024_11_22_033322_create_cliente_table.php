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
        DB::statement('CREATE TABLE IF NOT EXISTS `librosis`.`Cliente` (
            `idCliente` INT NOT NULL AUTO_INCREMENT,
            `Nombre` VARCHAR(45) NOT NULL,
            `Apellido` VARCHAR(45) NOT NULL,
            `Tipo` SET("Empresa", "Persona") NOT NULL,
            `NIT` VARCHAR(20) NULL,
            `CorreoElectronico` VARCHAR(45) NULL,
            `Direccion` VARCHAR(45) NULL,
            `Ciudad` VARCHAR(45) NULL,
            `Pais` VARCHAR(45) NULL,
            `Estado` SET("ACTIVO", "INACTIVO") NOT NULL,
            PRIMARY KEY (`idCliente`),
            UNIQUE INDEX `NIT_UNIQUE` (`NIT` ASC) VISIBLE)
            ENGINE = InnoDB;');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente');
    }
};
