<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class PedidoVenta
 *
 * @property int $id_pedido_venta
 * @property int $id_cliente
 * @property float|null $monto_total
 * @property string|null $metodo_pago
 * @property string $estado
 * @property Carbon|null $fecha_creacion
 * @property Carbon|null $fecha_modificacion
 *
 * @property Cliente $cliente
 * @property Collection|Movimiento[] $movimientos
 * @property Collection|PedidoVentaDetalle[] $pedido_venta_detalles
 *
 * @package App\Models
 */
class PedidoVenta extends Model
{
	use SoftDeletes;
	protected $table = 'pedido_venta';
	protected $primaryKey = 'id_pedido_venta';
	public $timestamps = true;

	protected $casts = [
		'id_cliente' => 'int',
		'monto_total' => 'float',
		'fecha_creacion' => 'datetime',
		'fecha_modificacion' => 'datetime',
		'fecha_eliminacion' => 'datetime'
	];

	protected $fillable = [
		'id_cliente',
		'monto_total',
		'metodo_pago',
		'estado',
		'fecha_creacion',
		'fecha_modificacion'
	];

	public function cliente()
	{
		return $this->belongsTo(Cliente::class, 'id_cliente');
	}

	public function movimientos()
	{
		return $this->hasMany(Movimiento::class, 'id_venta');
	}

	public function pedido_venta_detalles()
	{
		return $this->hasMany(PedidoVentaDetalle::class, 'id_pedido_venta');
	}
}
