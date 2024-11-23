<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;



/**
 * Class PermisoRol
 *
 * @property int|null $id_permiso
 * @property int|null $id_rol
 *
 * @property Permiso|null $permiso
 * @property Rol|null $rol
 *
 * @package App\Models
 */
class PermisoRol extends Model
{
	protected $table = 'permiso_rol';
	public $incrementing = false;
	public $timestamps = true;

	protected $casts = [
		'id_permiso' => 'int',
		'id_rol' => 'int'
	];

	protected $fillable = [
		'id_permiso',
		'id_rol'
	];

	public function permiso()
	{
		return $this->belongsTo(Permiso::class, 'id_permiso');
	}

	public function rol()
	{
		return $this->belongsTo(Rol::class, 'id_rol');
	}
}
