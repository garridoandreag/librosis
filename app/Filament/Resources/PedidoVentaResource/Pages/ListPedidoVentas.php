<?php

namespace App\Filament\Resources\PedidoVentaResource\Pages;

use App\Filament\Resources\PedidoVentaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPedidoVentas extends ListRecords
{
    protected static string $resource = PedidoVentaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
