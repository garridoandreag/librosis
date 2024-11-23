<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class OrdenCompra
 *
 * @property int $id_orden_compra
 * @property int $id_proveedor
 * @property Carbon|null $fecha_creacion
 * @property Carbon|null $fecha_modificacion
 * @property float|null $total
 * @property Carbon|null $fecha_entrega
 * @property string $estado
 *
 * @property Proveedor $proveedor
 * @property Collection|Movimiento[] $movimientos
 * @property Collection|OrdenCompraDetalle[] $orden_compra_detalles
 *
 * @package App\Models
 */
class OrdenCompra extends Model
{
	protected $table = 'orden_compra';
	protected $primaryKey = 'id_orden_compra';
	public $timestamps = true;

	protected $casts = [
		'id_proveedor' => 'int',
		'fecha_creacion' => 'datetime',
		'fecha_modificacion' => 'datetime',
		'total' => 'float',
		'fecha_entrega' => 'datetime'
	];

	protected $fillable = [
		'id_proveedor',
		'fecha_creacion',
		'fecha_modificacion',
		'total',
		'fecha_entrega',
		'estado'
	];

	public function proveedor()
	{
		return $this->belongsTo(Proveedor::class, 'id_proveedor');
	}

	public function movimientos()
	{
		return $this->hasMany(Movimiento::class, 'id_compra');
	}

	public function orden_compra_detalles()
	{
		return $this->hasMany(OrdenCompraDetalle::class, 'id_orden_compra');
	}
}
