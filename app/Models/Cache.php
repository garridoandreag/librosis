<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;



/**
 * Class Cache
 *
 * @property string $key
 * @property string $value
 * @property int $expiration
 *
 * @package App\Models
 */
class Cache extends Model
{
	protected $table = 'cache';
	protected $primaryKey = 'key';
	public $incrementing = false;
	public $timestamps = true;

	protected $casts = [
		'expiration' => 'int'
	];

	protected $fillable = [
		'value',
		'expiration'
	];
}
