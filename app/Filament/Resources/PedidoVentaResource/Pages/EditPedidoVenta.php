<?php

namespace App\Filament\Resources\PedidoVentaResource\Pages;

use App\Filament\Resources\PedidoVentaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPedidoVenta extends EditRecord
{
    protected static string $resource = PedidoVentaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
