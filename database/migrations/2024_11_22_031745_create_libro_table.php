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
        DB::statement('CREATE TABLE IF NOT EXISTS `librosis`.`Libro` (
            `idLibro` INT NOT NULL AUTO_INCREMENT,
            `ISBN` VARCHAR(20) NULL,
            `Titulo` VARCHAR(50) NOT NULL,
            `idGenero` INT NOT NULL,
            `Sinopsis` VARCHAR(200) NULL,
            `Precio` DECIMAL(2) NULL,
            `idEditorial` INT NULL,
            `FechaPublicacion` DATE NULL,
            `imagen` VARCHAR(200) NULL,
            `Idioma` SET("ES", "EN", "OTRO") NOT NULL,
            `Estado` SET("ACTIVO", "INACTIVO") NOT NULL,
            PRIMARY KEY (`idLibro`),
            UNIQUE INDEX `idLibro_UNIQUE` (`idLibro` ASC) VISIBLE,
            UNIQUE INDEX `ISBN_UNIQUE` (`ISBN` ASC) VISIBLE,
            INDEX `idGenero_idx` (`idGenero` ASC) VISIBLE,
            CONSTRAINT `FK_Genero`
                FOREIGN KEY (`idGenero`)
                REFERENCES `librosis`.`Genero` (`idGenero`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION)
            ENGINE = InnoDB;');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libro');
    }
};
