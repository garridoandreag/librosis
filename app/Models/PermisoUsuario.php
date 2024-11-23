<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;



/**
 * Class PermisoUsuario
 *
 * @property int|null $id_permiso
 * @property int|null $id_usuario
 *
 * @property Permiso|null $permiso
 * @property User|null $user
 *
 * @package App\Models
 */
class PermisoUsuario extends Model
{
	protected $table = 'permiso_usuario';
	public $incrementing = false;
	public $timestamps = true;

	protected $casts = [
		'id_permiso' => 'int',
		'id_usuario' => 'int'
	];

	protected $fillable = [
		'id_permiso',
		'id_usuario'
	];

	public function permiso()
	{
		return $this->belongsTo(Permiso::class, 'id_permiso');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'id_usuario');
	}
}
