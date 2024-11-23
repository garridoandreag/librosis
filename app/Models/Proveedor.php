<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    //
    protected $fillable = [
        'Nombre',
        'PersonaContacto',
        'NumeroTelefonico',
        'Email',
        'Direaccion',
        'Ciudad',
        'Pais',
        'CodigoPostal',
        'Estado',
    ];

    protected $table = 'proveedor';
    protected $primaryKey = 'idProveedor';
    const CREATED_AT = 'FechaCreacion';
    const UPDATED_AT = 'FechaModificacion';
}
