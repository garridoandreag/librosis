<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ordencompradetalle extends Model
{
        //
        protected $fillable = [
            'idOrdenCompra',
            'idLibro',
            'Cantidad',
            'PrecioUnitario',
            'PrecioTotal',
        ];

        public function ordencompra(): BelongsTo
        {
            return $this->belongsTo(ordencompra::class);
        }

        public function libro(): BelongsTo
        {
            return $this->belongsTo(libro::class);
        }
    
        protected $table = 'ordencompra';
        protected $primaryKey = 'idOrdenCompraDetalle';

        const CREATED_AT = 'FechaCreacion';
        const UPDATED_AT = 'FechaModificacion';
}
