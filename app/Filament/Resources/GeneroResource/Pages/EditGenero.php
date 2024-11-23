<?php

namespace App\Filament\Resources\GeneroResource\Pages;

use App\Filament\Resources\GeneroResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGenero extends EditRecord {
    protected static string $resource = GeneroResource::class;

    protected function getHeaderActions(): array {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }

    protected function getRedirectUrl(): string {
        return $this->getResource()::getUrl('index');
    }
}
