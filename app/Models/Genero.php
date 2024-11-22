<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    //
    protected $fillable = [
        'Nombre',
        'Estado',
    ];

    protected $hidden = [
        'idGenero',
    ];

    protected $table = 'genero';
    protected $primaryKey = 'idGenero';
    const CREATED_AT = 'FechaCreacion';
    const UPDATED_AT = 'FechaModificacion';
}
