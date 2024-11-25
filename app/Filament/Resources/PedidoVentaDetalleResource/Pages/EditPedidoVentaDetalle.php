<?php

namespace App\Filament\Resources\PedidoVentaDetalleResource\Pages;

use App\Filament\Resources\PedidoVentaDetalleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPedidoVentaDetalle extends EditRecord
{
    protected static string $resource = PedidoVentaDetalleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
