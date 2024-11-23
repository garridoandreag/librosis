<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class Rol
 *
 * @property int $id_rol
 * @property string|null $nombre
 * @property string|null $descripcion
 * @property string|null $estado
 * @property Carbon|null $fecha_creacion
 * @property Carbon|null $fecha_modificacion
 *
 * @property Collection|Permiso[] $permisos
 * @property RolUsuario $rol_usuario
 *
 * @package App\Models
 */
class Rol extends Model
{
	protected $table = 'rol';
	protected $primaryKey = 'id_rol';
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

	public function permisos()
	{
		return $this->belongsToMany(Permiso::class, 'permiso_rol', 'id_rol', 'id_permiso');
	}

	public function rol_usuario()
	{
		return $this->hasOne(RolUsuario::class, 'id_rol');
	}
}
