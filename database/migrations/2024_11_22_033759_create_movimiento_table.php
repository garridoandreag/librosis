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
        DB::statement('CREATE TABLE IF NOT EXISTS `librosis`.`Movimiento` (
            `idMovimiento` INT NOT NULL AUTO_INCREMENT,
            `idVenta` INT NULL,
            `idVentaDetalle` INT NULL,
            `CantidadSalida` INT NULL,
            `idCliente` INT NULL,
            `idCompra` INT NULL,
            `idCompraDetalle` INT NULL,
            `idLibro` INT NOT NULL,
            `CantidadEntrada` INT NOT NULL,
            `idProveedor` INT NULL,
            `PrecioUnitario` DECIMAL(2) NOT NULL,
            `PrecioTotal` DECIMAL(2) NULL,
            `Usuario` VARCHAR(45) NULL,
            `FechaCreacion` TIMESTAMP NULL,
            PRIMARY KEY (`idMovimiento`),
            INDEX `FK_MOV_VENTA_idx` (`idVenta` ASC) VISIBLE,
            INDEX `FK_MOV_VENTAD_idx` (`idVentaDetalle` ASC) VISIBLE,
            INDEX `FK_MOV_COMPRA_idx` (`idCompra` ASC) VISIBLE,
            INDEX `FK_MOV_COMPRAD_idx` (`idCompraDetalle` ASC) VISIBLE,
            INDEX `FK_MOV_LIBRO_idx` (`idLibro` ASC) VISIBLE,
            INDEX `FK_MOV_CLIENTE_idx` (`idCliente` ASC) VISIBLE,
            INDEX `FK_MOV_PROVEEDOR_idx` (`idProveedor` ASC) VISIBLE,
            CONSTRAINT `FK_MOV_VENTA`
                FOREIGN KEY (`idVenta`)
                REFERENCES `librosis`.`PedidoVenta` (`idPedidoVenta`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION,
            CONSTRAINT `FK_MOV_VENTAD`
                FOREIGN KEY (`idVentaDetalle`)
                REFERENCES `librosis`.`PedidoVentaDetalle` (`idPedidoVentaDetalle`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION,
            CONSTRAINT `FK_MOV_COMPRA`
                FOREIGN KEY (`idCompra`)
                REFERENCES `librosis`.`OrdenCompra` (`idOrdenCompra`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION,
            CONSTRAINT `FK_MOV_COMPRAD`
                FOREIGN KEY (`idCompraDetalle`)
                REFERENCES `librosis`.`OrdenCompraDetalle` (`idOrdenCompraDetalle`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION,
            CONSTRAINT `FK_MOV_LIBRO`
                FOREIGN KEY (`idLibro`)
                REFERENCES `librosis`.`Libro` (`idLibro`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION,
            CONSTRAINT `FK_MOV_CLIENTE`
                FOREIGN KEY (`idCliente`)
                REFERENCES `librosis`.`Cliente` (`idCliente`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION,
            CONSTRAINT `FK_MOV_PROVEEDOR`
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
        Schema::dropIfExists('movimiento');
    }
};
