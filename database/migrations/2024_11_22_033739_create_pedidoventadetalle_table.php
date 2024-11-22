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
        DB::statement('CREATE TABLE IF NOT EXISTS `librosis`.`PedidoVentaDetalle` (
            `idPedidoVentaDetalle` INT NOT NULL AUTO_INCREMENT,
            `idPedidoVenta` INT NOT NULL,
            `idLibro` INT NOT NULL,
            `Cantidad` INT NOT NULL,
            `Precio` DECIMAL(2) NOT NULL,
            `PrecioTotal` DECIMAL(2) NULL,
            `FechaCreacion` TIMESTAMP NULL,
            `FechaModificacion` TIMESTAMP NULL,
            `Usuario` VARCHAR(45) NULL,
            PRIMARY KEY (`idPedidoVentaDetalle`),
            INDEX `FK_PEDIDOVENTA_idx` (`idPedidoVenta` ASC) VISIBLE,
            INDEX `FK_LIBRO_PEDIDO_idx` (`idLibro` ASC) VISIBLE,
            CONSTRAINT `FK_PEDIDOVENTA`
                FOREIGN KEY (`idPedidoVenta`)
                REFERENCES `librosis`.`PedidoVenta` (`idPedidoVenta`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION,
            CONSTRAINT `FK_LIBRO_VENTA`
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
        Schema::dropIfExists('pedidoventadetalle');
    }
};
