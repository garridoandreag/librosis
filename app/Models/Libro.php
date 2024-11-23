<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    //
    protected $fillable = [
        'ISBN',
        'Titulo',
        'Sinopsis',
        'Precio',
        'idGenero',
        'FechaPublicacion',
        'imagen',
        'Idioma',
        'Estado',
    ];

    protected $table = 'libro';
    protected $primaryKey = 'idLibro';
    const CREATED_AT = 'FechaCreacion';
    const UPDATED_AT = 'FechaModificacion';
}
