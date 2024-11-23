<?php

namespace App\Filament\Resources\AutorResource\Pages;

use App\Filament\Resources\AutorResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateAutor extends CreateRecord
{
    protected static string $resource = AutorResource::class;

    protected function handleRecordCreation(array $data): Model {
        $data['estado'] = 'ACTIVO';
        return static::getModel()::create($data);
    }

    protected function getRedirectUrl(): string {
        return $this->getResource()::getUrl('index');
    }
}
