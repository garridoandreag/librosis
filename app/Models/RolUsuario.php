<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;



/**
 * Class RolUsuario
 *
 * @property int $id_rol
 * @property int|null $id_usuario
 *
 * @property Rol $rol
 * @property User|null $user
 *
 * @package App\Models
 */
class RolUsuario extends Model
{
	protected $table = 'rol_usuario';
	public $incrementing = false;
	public $timestamps = true;

	protected $casts = [
		'id_rol' => 'int',
		'id_usuario' => 'int'
	];

	protected $fillable = [
		'id_rol',
		'id_usuario'
	];

	public function rol()
	{
		return $this->belongsTo(Rol::class, 'id_rol');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'id_usuario');
	}
}
