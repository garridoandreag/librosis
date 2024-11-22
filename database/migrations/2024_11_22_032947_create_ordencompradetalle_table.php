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
        DB::statement('CREATE TABLE IF NOT EXISTS `librosis`.`OrdenCompraDetalle` (
            `idOrdenCompraDetalle` INT NOT NULL AUTO_INCREMENT,
            `idOrdenCompra` INT NOT NULL,
            `idLibro` INT NOT NULL,
            `Cantidad` INT NOT NULL,
            `PrecioUnitario` DECIMAL(2) NOT NULL,
            `PrecioTotal` DECIMAL(2) NOT NULL,
            `FechaCreacion` DATETIME NULL,
            `Usuario` VARCHAR(45) NULL,
            PRIMARY KEY (`idOrdenCompraDetalle`),
            INDEX `FK_Libro_idx` (`idLibro` ASC) VISIBLE,
            INDEX `FK_OrdenCompra_idx` (`idOrdenCompra` ASC) VISIBLE,
            CONSTRAINT `FK_ORDENCOMPRA`
                FOREIGN KEY (`idOrdenCompra`)
                REFERENCES `librosis`.`OrdenCompra` (`idOrdenCompra`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION,
            CONSTRAINT `FK_LIBRO_COMPRA`
                FOREIGN KEY (`idLibro`)
                REFERENCES `librosis`.`Libro` (`idLibro`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION)
            ENGINE = InnoDB;');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordencompradetalle');
    }
};
