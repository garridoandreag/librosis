<?php

namespace App\Filament\Resources\ProveedorResource\Pages;

use App\Filament\Resources\ProveedorResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateProveedor extends CreateRecord {
    protected static string $resource = ProveedorResource::class;

    protected function handleRecordCreation(array $data): Model {
        $data['estado'] = 'ACTIVO';
        return static::getModel()::create($data);
    }

    protected function getRedirectUrl(): string {
        return $this->getResource()::getUrl('index');
    }
}
