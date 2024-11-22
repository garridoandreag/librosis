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
        DB::statement('CREATE TABLE IF NOT EXISTS `librosis`.`Proveedor` (
            `idProveedor` INT NOT NULL AUTO_INCREMENT,
            `Nombre` VARCHAR(45) NOT NULL,
            `PersonaContacto` VARCHAR(45) NULL,
            `NumeroTelefonico` VARCHAR(45) NULL,
            `Email` VARCHAR(45) NULL,
            `Direccion` VARCHAR(200) NULL,
            `Ciudad` VARCHAR(45) NULL,
            `Pais` VARCHAR(45) NULL,
            `CodigoPostal` VARCHAR(45) NULL,
            `Estado` SET("ACTIVO", "INACTIVO") NOT NULL,
            PRIMARY KEY (`idProveedor`))
            ENGINE = InnoDB;');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedor');
    }
};
