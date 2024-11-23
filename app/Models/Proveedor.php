<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Proveedor
 *
 * @property int $id_proveedor
 * @property string $nombre
 * @property string|null $persona_contacto
 * @property string|null $numero_telefonico
 * @property string|null $email
 * @property string|null $direccion
 * @property string|null $ciudad
 * @property string|null $pais
 * @property string|null $codigo_postal
 * @property string $estado
 * @property Carbon|null $fecha_creacion
 * @property Carbon|null $fecha_modificacion
 *
 * @property Collection|Movimiento[] $movimientos
 * @property Collection|OrdenCompra[] $orden_compras
 *
 * @package App\Models
 */
class Proveedor extends Model {
    use SoftDeletes;
    protected $table = 'proveedor';
    protected $primaryKey = 'id_proveedor';
    public $timestamps = true;

    protected $casts = [
        'fecha_creacion' => 'datetime',
        'fecha_modificacion' => 'datetime',
        'fecha_eliminacion' => 'datetime'
    ];

    protected $fillable = [
        'nombre',
        'persona_contacto',
        'numero_telefonico',
        'email',
        'direccion',
        'ciudad',
        'pais',
        'codigo_postal',
        'estado',
        'fecha_creacion',
        'fecha_modificacion',
        'fecha_eliminacion'
    ];

    public function movimientos() {
        return $this->hasMany(Movimiento::class, 'id_proveedor');
    }

    public function orden_compras() {
        return $this->hasMany(OrdenCompra::class, 'id_proveedor');
    }
}
