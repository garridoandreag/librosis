<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Genero
 *
 * @property int $id_genero
 * @property string $nombre
 * @property string $estado
 * @property Carbon|null $fecha_creacion
 * @property Carbon|null $fecha_modificacion
 *
 * @property Collection|Libro[] $libros
 *
 * @package App\Models
 */
class Genero extends Model {
    use SoftDeletes;
    protected $table = 'genero';
    protected $primaryKey = 'id_genero';
    public $timestamps = true;

    protected $casts = [
        'fecha_creacion' => 'datetime',
        'fecha_modificacion' => 'datetime',
        'fecha_eliminacion' => 'datetime'
    ];

    protected $fillable = [
        'nombre',
        'estado',
        'fecha_creacion',
        'fecha_modificacion',
        'fecha_eliminacion'
    ];

    public function libros() {
        return $this->hasMany(Libro::class, 'id_genero');
    }
}
