<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class PedidoVentaDetalle
 *
 * @property int $id_pedido_venta_detalle
 * @property int $id_pedido_venta
 * @property int $id_libro
 * @property int $cantidad
 * @property float $precio
 * @property float|null $precio_total
 * @property Carbon|null $fecha_creacion
 * @property Carbon|null $fecha_modificacion
 * @property string|null $usuario
 *
 * @property Libro $libro
 * @property PedidoVentum $pedido_ventum
 * @property Collection|Movimiento[] $movimientos
 *
 * @package App\Models
 */
class PedidoVentaDetalle extends Model
{
	protected $table = 'pedido_venta_detalle';
	protected $primaryKey = 'id_pedido_venta_detalle';
	public $timestamps = true;

	protected $casts = [
		'id_pedido_venta' => 'int',
		'id_libro' => 'int',
		'cantidad' => 'int',
		'precio' => 'float',
		'precio_total' => 'float',
		'fecha_creacion' => 'datetime',
		'fecha_modificacion' => 'datetime'
	];

	protected $fillable = [
		'id_pedido_venta',
		'id_libro',
		'cantidad',
		'precio',
		'precio_total',
		'fecha_creacion',
		'fecha_modificacion',
		'usuario'
	];

	public function libro()
	{
		return $this->belongsTo(Libro::class, 'id_libro');
	}

	public function pedido_ventum()
	{
		return $this->belongsTo(PedidoVentum::class, 'id_pedido_venta');
	}

	public function movimientos()
	{
		return $this->hasMany(Movimiento::class, 'id_venta_detalle');
	}
}
