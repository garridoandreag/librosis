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
        DB::statement('CREATE TABLE IF NOT EXISTS `librosis`.`OrdenCompra` (
            `idOrdenCompra` INT NOT NULL AUTO_INCREMENT,
            `idProveedor` INT NOT NULL,
            `FechaCreacion` DATE NULL,
            `Total` DECIMAL(2) NULL,
            `FechaEntrega` DATE NULL,
            `ESTADO` SET("PENDIENTE", "RECIBIDO", "CANCELADO") NOT NULL,
            PRIMARY KEY (`idOrdenCompra`),
            INDEX `idProveedor_idx` (`idProveedor` ASC) VISIBLE,
            CONSTRAINT `FK_Proveedor`
                FOREIGN KEY (`idProveedor`)
                REFERENCES `librosis`.`Proveedor` (`idProveedor`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION)
            ENGINE = InnoDB;');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordencompra');
    }
};
