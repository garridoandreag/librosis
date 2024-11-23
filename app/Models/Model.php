<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as BaseModel;

class Model extends BaseModel {

    const CREATED_AT = 'fecha_creacion';
    const UPDATED_AT = 'fecha_modificacion';
    const DELETED_AT = 'fecha_eliminacion';

    public function __construct() {
        parent::__construct();
        $this->perPage = + (request('pageSize', request('per_page', env('PER_PAGE', $this->perPage))));
    }
}
