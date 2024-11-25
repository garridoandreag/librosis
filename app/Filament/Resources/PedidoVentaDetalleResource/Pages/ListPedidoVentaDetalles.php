<?php

namespace App\Filament\Resources\PedidoVentaDetalleResource\Pages;

use App\Filament\Resources\PedidoVentaDetalleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPedidoVentaDetalles extends ListRecords
{
    protected static string $resource = PedidoVentaDetalleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
