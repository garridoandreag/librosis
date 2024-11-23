<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

/**
 * Class User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property PermisoUsuario $permiso_usuario
 * @property RolUsuario $rol_usuario
 *
 * @package App\Models
 */
class User extends Model implements AuthenticatableContract {

    use Authenticatable;
	protected $table = 'users';

	protected $casts = [
		'email_verified_at' => 'datetime'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'name',
		'email',
		'email_verified_at',
		'password',
		'remember_token'
	];

	public function permiso_usuario()
	{
		return $this->hasOne(PermisoUsuario::class, 'id_usuario');
	}

	public function rol_usuario()
	{
		return $this->hasOne(RolUsuario::class, 'id_usuario');
	}
}
