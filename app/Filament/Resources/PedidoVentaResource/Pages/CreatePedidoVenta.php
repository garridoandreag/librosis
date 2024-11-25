<?php

namespace App\Filament\Resources\PedidoVentaResource\Pages;

use App\Filament\Resources\PedidoVentaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use App\Models\PedidoVenta;
use App\Models\PedidoVentaDetalles;

class CreatePedidoVenta extends CreateRecord
{
    protected static string $resource = PedidoVentaResource::class;

    protected function handleRecordCreation(array $data): Model {


        $data['estado'] = 'COMPLETADO';
        $pedido_venta = PedidoVenta::create($data);

        foreach ($data['venta_detalles'] as $pedido_venta_detalle) {
            //'usuario' => Auth::user()

            $pedido_venta->pedido_venta_detalles()->updateOrCreate($pedido_venta_detalle);

        return $pedido_venta;
    }

    // protected function beforeSave(array $data): void
    // {
    //     echo "before Save";

    //     $pedido_venta_detalles = $data['pedido_venta_detalles'];

    //     foreach ($pedido_venta_detalles as $pedido_venta_detalle) {
    //     $this->pedido_venta_detalles()->updateOrCreate([
    //         'id_libro' => $request->input('id_libro'),
    //         'cantidad' => $request->input('cantidad'),
    //         'precio' => $request->input('precio'),
    //         'precio_total' => $request->input('precio_total'),
    //         'usuario' => Auth::user(),
    //     ]);
    // };
        
    }


    protected function getRedirectUrl(): string {
        return $this->getResource()::getUrl('index');
    }
}
