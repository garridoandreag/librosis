<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ordencompra extends Model
{
    //
    protected $fillable = [
        'idProveedor',
        'FechaEntrega',
        'Total',
        'FechaCreacion',
        'Estado',
    ];

    protected $table = 'ordencompra';
    protected $primaryKey = 'idOrdenCompra';
    const CREATED_AT = 'FechaCreacion';
    const UPDATED_AT = 'FechaModificacion';
}
