<?php

namespace App\Filament\Resources\LibroResource\Pages;

use App\Filament\Resources\LibroResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateLibro extends CreateRecord
{
    protected static string $resource = LibroResource::class;

    protected function handleRecordCreation(array $data): Model {
        $data['estado'] = 'ACTIVO';
        return static::getModel()::create($data);
    }

    protected function getRedirectUrl(): string {
        return $this->getResource()::getUrl('index');
    }
}

