<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class Permiso
 *
 * @property int $id_permiso
 * @property string|null $nombre
 * @property string|null $descripcion
 * @property string|null $estado
 * @property Carbon|null $fecha_creacion
 * @property Carbon|null $fecha_modificacion
 *
 * @property Collection|Rol[] $rols
 * @property PermisoUsuario $permiso_usuario
 *
 * @package App\Models
 */
class Permiso extends Model
{
	protected $table = 'permiso';
	protected $primaryKey = 'id_permiso';
	public $timestamps = true;

	protected $casts = [
		'fecha_creacion' => 'datetime',
		'fecha_modificacion' => 'datetime'
	];

	protected $fillable = [
		'nombre',
		'descripcion',
		'estado',
		'fecha_creacion',
		'fecha_modificacion'
	];

	public function rols()
	{
		return $this->belongsToMany(Rol::class, 'permiso_rol', 'id_permiso', 'id_rol');
	}

	public function permiso_usuario()
	{
		return $this->hasOne(PermisoUsuario::class, 'id_permiso');
	}
}
