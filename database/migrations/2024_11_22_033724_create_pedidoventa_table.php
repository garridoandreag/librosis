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
        DB::statement('CREATE TABLE IF NOT EXISTS `librosis`.`PedidoVenta` (
            `idPedidoVenta` INT NOT NULL AUTO_INCREMENT,
            `idCliente` INT NOT NULL,
            `MontoTotal` DECIMAL(2) NULL,
            `MetodoPago` SET("TARJETA", "EFECTIVO", "TARJETA DE REGALO", "CREDITO") NULL,
            `Estado` SET("PROCESANDO", "COMPLETADO", "CANCELADO") NOT NULL,
            PRIMARY KEY (`idPedidoVenta`),
            INDEX `FK_CLIENTE_idx` (`idCliente` ASC) VISIBLE,
            CONSTRAINT `FK_CLIENTE`
                FOREIGN KEY (`idCliente`)
                REFERENCES `librosis`.`Cliente` (`idCliente`)
                ON DELETE NO ACTION
                ON UPDATE NO ACTION)
            ENGINE = InnoDB;');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidoventa');
    }
};
