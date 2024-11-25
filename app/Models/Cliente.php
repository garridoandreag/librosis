<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
/**
 * Class Cliente
 *
 * @property int $id_cliente
 * @property string $nombre
 * @property string $apellido
 * @property string $tipo
 * @property string|null $nit
 * @property string|null $correo_electronico
 * @property string|null $direccion
 * @property string|null $ciudad
 * @property string|null $pais
 * @property string $estado
 * @property Carbon|null $fecha_creacion
 * @property Carbon|null $fecha_modificacion
 *
 * @property Collection|Movimiento[] $movimientos
 * @property Collection|PedidoVentum[] $pedido_venta
 *
 * @package App\Models
 */
class Cliente extends Model
{
	use SoftDeletes;
	use HasFactory;
	protected $table = 'cliente';
	protected $primaryKey = 'id_cliente';
	public $timestamps = true;

	protected $casts = [
		'fecha_creacion' => 'datetime',
		'fecha_modificacion' => 'datetime',
		'fecha_eliminacion' => 'datetime'
	];

	protected $fillable = [
		'nombre',
		'apellido',
		'tipo',
		'nit',
		'correo_electronico',
		'direccion',
		'ciudad',
		'pais',
		'estado',
		'fecha_creacion',
		'fecha_modificacion'
	];

	public function movimientos()
	{
		return $this->hasMany(Movimiento::class, 'id_cliente');
	}

	public function pedido_venta()
	{
		return $this->hasMany(PedidoVentum::class, 'id_cliente');
	}

	public function getFullNameAttribute(){
		return '('.$this->nit.') '.$this->nombre.' '.$this->apellido;
	}
}
