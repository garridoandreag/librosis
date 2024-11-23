<?php

namespace App\Filament\Resources\GeneroResource\Pages;

use App\Filament\Resources\GeneroResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateGenero extends CreateRecord {
    protected static string $resource = GeneroResource::class;

    protected function handleRecordCreation(array $data): Model {
        $data['estado'] = 'ACTIVO';
        return static::getModel()::create($data);
    }

    protected function getRedirectUrl(): string {
        return $this->getResource()::getUrl('index');
    }
}
