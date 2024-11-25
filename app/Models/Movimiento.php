<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;

/**
 * Class Movimiento
 *
 * @property int $id_movimiento
 * @property int|null $id_venta
 * @property int|null $id_venta_detalle
 * @property int|null $cantidadSalida
 * @property int|null $id_cliente
 * @property int|null $id_compra
 * @property int|null $id_compra_detalle
 * @property int $id_libro
 * @property int $cantidad_entrada
 * @property int|null $id_proveedor
 * @property float $precio_unitario
 * @property float|null $precio_total
 * @property string|null $usuario
 * @property Carbon|null $fecha_creacion
 * @property Carbon|null $fecha_modificacion
 *
 * @property Cliente|null $cliente
 * @property OrdenCompra|null $orden_compra
 * @property OrdenCompraDetalle|null $orden_compra_detalle
 * @property Libro $libro
 * @property Proveedor|null $proveedor
 * @property PedidoVenta|null $pedido_venta
 * @property PedidoVentaDetalle|null $pedido_venta_detalle
 *
 * @package App\Models
 */
class Movimiento extends Model
{
	protected $table = 'movimiento';
	protected $primaryKey = 'id_movimiento';
	public $timestamps = true;

	protected $casts = [
		'id_venta' => 'int',
		'id_venta_detalle' => 'int',
		'cantidadSalida' => 'int',
		'id_cliente' => 'int',
		'id_compra' => 'int',
		'id_compra_detalle' => 'int',
		'id_libro' => 'int',
		'cantidad_entrada' => 'int',
		'id_proveedor' => 'int',
		'precio_unitario' => 'float',
		'precio_total' => 'float',
		'fecha_creacion' => 'datetime',
		'fecha_modificacion' => 'datetime'
	];

	protected $fillable = [
		'id_venta',
		'id_venta_detalle',
		'cantidadSalida',
		'id_cliente',
		'id_compra',
		'id_compra_detalle',
		'id_libro',
		'cantidad_entrada',
		'id_proveedor',
		'precio_unitario',
		'precio_total',
		'usuario',
		'fecha_creacion',
		'fecha_modificacion'
	];

	public function cliente()
	{
		return $this->belongsTo(Cliente::class, 'id_cliente');
	}

	public function orden_compra()
	{
		return $this->belongsTo(OrdenCompra::class, 'id_compra');
	}

	public function orden_compra_detalle()
	{
		return $this->belongsTo(OrdenCompraDetalle::class, 'id_compra_detalle');
	}

	public function libro()
	{
		return $this->belongsTo(Libro::class, 'id_libro');
	}

	public function proveedor()
	{
		return $this->belongsTo(Proveedor::class, 'id_proveedor');
	}

	public function pedido_venta()
	{
		return $this->belongsTo(PedidoVenta::class, 'id_venta');
	}

	public function pedido_venta_detalle()
	{
		return $this->belongsTo(PedidoVentaDetalle::class, 'id_venta_detalle');
	}
}
