<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class Libro
 *
 * @property int $id_libro
 * @property string|null $isbn
 * @property string $titulo
 * @property int $id_genero
 * @property string|null $sinopsis
 * @property float|null $precio
 * @property Carbon|null $fecha_publicacion
 * @property string|null $imagen
 * @property string $idioma
 * @property string $estado
 * @property Carbon|null $fecha_creacion
 * @property Carbon|null $fecha_modificacion
 *
 * @property Genero $genero
 * @property Collection|Movimiento[] $movimientos
 * @property Collection|OrdenCompraDetalle[] $orden_compra_detalles
 * @property Collection|PedidoVentaDetalle[] $pedido_venta_detalles
 *
 * @package App\Models
 */
class Libro extends Model
{
	protected $table = 'libro';
	protected $primaryKey = 'id_libro';
	public $timestamps = true;

	protected $casts = [
		'id_genero' => 'int',
		'precio' => 'float',
		'fecha_publicacion' => 'datetime',
		'fecha_creacion' => 'datetime',
		'fecha_modificacion' => 'datetime'
	];

	protected $fillable = [
		'isbn',
		'titulo',
		'id_genero',
		'sinopsis',
		'precio',
		'fecha_publicacion',
		'imagen',
		'idioma',
		'estado',
		'fecha_creacion',
		'fecha_modificacion'
	];

	public function genero()
	{
		return $this->belongsTo(Genero::class, 'id_genero');
	}

	public function movimientos()
	{
		return $this->hasMany(Movimiento::class, 'id_libro');
	}

	public function orden_compra_detalles()
	{
		return $this->hasMany(OrdenCompraDetalle::class, 'id_libro');
	}

	public function pedido_venta_detalles()
	{
		return $this->hasMany(PedidoVentaDetalle::class, 'id_libro');
	}
}
