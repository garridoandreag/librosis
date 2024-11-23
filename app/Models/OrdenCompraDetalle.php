<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class OrdenCompraDetalle
 *
 * @property int $id_orden_compraDetalle
 * @property int $id_orden_compra
 * @property int $id_libro
 * @property int $cantidad
 * @property float $precio_unitario
 * @property float $precio_total
 * @property Carbon|null $fecha_creacion
 * @property Carbon|null $fecha_modificacion
 * @property string|null $usuario
 *
 * @property Libro $libro
 * @property OrdenCompra $orden_compra
 * @property Collection|Movimiento[] $movimientos
 *
 * @package App\Models
 */
class OrdenCompraDetalle extends Model
{
	protected $table = 'orden_compra_detalle';
	protected $primaryKey = 'id_orden_compraDetalle';
	public $timestamps = true;

	protected $casts = [
		'id_orden_compra' => 'int',
		'id_libro' => 'int',
		'cantidad' => 'int',
		'precio_unitario' => 'float',
		'precio_total' => 'float',
		'fecha_creacion' => 'datetime',
		'fecha_modificacion' => 'datetime'
	];

	protected $fillable = [
		'id_orden_compra',
		'id_libro',
		'cantidad',
		'precio_unitario',
		'precio_total',
		'fecha_creacion',
		'fecha_modificacion',
		'usuario'
	];

	public function libro()
	{
		return $this->belongsTo(Libro::class, 'id_libro');
	}

	public function orden_compra()
	{
		return $this->belongsTo(OrdenCompra::class, 'id_orden_compra');
	}

	public function movimientos()
	{
		return $this->hasMany(Movimiento::class, 'id_compra_detalle');
	}
}
