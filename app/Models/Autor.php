<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Autor
 *
 * @property int $id_autor
 * @property string $nombre
 * @property string $estado
 * @property Carbon|null $fecha_creacion
 * @property Carbon|null $fecha_modificacion
 *
 * @property Collection|Libro[] $libros
 *
 * @package App\Models
 */
class Autor extends Model {
    use SoftDeletes;
    protected $table = 'autor';
    protected $primaryKey = 'id_autor';
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
        return $this->hasMany(Libro::class, 'id_autor');
    }
}
