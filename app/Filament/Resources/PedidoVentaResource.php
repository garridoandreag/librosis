<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PedidoVentaResource\Pages;
use App\Filament\Resources\PedidoVentaResource\RelationManagers;
use App\Models\PedidoVenta;
use App\Models\PedidoVentaDetalle;
use App\Models\Cliente;
use App\Models\Libro;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextInputColumn;
use Illuminate\Http\Request;
//use Filament\Pages\Concerns\InteractsWithFormActions;
use Filament\Resources\Pages\CreateRecord;


class PedidoVentaResource extends Resource
{


    protected static ?string $model = PedidoVenta::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    //use InteractsWithFormActions;

    public static function form(Form $form): Form
    {
       // echo("<script>console.log('PHP: ');</script>");

        return $form
            ->schema([
                Select::make('id_cliente')
                    ->label('Cliente')
                    ->options(Cliente::all()->pluck('full_name', 'id_cliente'))
                    ->searchable()
                    //->disabled()
                    ->required(),
                //Forms\Components\TextInput::make('metodo_pago'),
                // Forms\Components\TextInput::make('estado')
                //     ->required()

                Forms\Components\Select::make('estado')
                ->options([
                    'PROCESANDO' => 'Procesando',
                    'COMPLETADO' => 'Completado',
                    'CANCELADO' => 'Cancelado',
                ])->default('PROCESANDO')
                //->disabled()
                ->required(),

                Forms\Components\Select::make('metodo_pago')
                ->options([
                    
                    'TARJETA' => 'Tarjeta',
                    'EFECTIVO' => 'Efectivo',
                    'TARJETA DE REGALO' => 'Tarjeta de Regalo',
                    'CREDITO' => 'Credito',
                ])
                //->disabled()
                ->required(),
                
                TextInput::make('monto_total')
                ->prefix('Q. ')
                ->disabled()
                ->numeric()
                ->default(0),
                
                Repeater::make('venta_detalles')
                ->schema([
                    Select::make('id_libro')
                    ->label('Libro')
                    ->options(Libro::all()->pluck('titulo', 'id_libro'))
                    ->searchable()
                    ->afterStateUpdated(function ($state, $set) {
                        $set('precio',Libro::find($state)->precio);
                    }),
                    
                    TextInput::make('cantidad')
                    ->required()
                    ->numeric()
                    ->afterStateUpdated(function ($state, $set, $get) {
                        $set('precio_total',Libro::find($get('id_libro'))->precio * $state);
                    }),

                    TextInput::make('precio')
                    ->prefix('Q. ')
                    ->readOnly()
                    ->default(fn ($get) => $get('id_libro')) ,

                   //(fn (array $state): ?string => $state['name'] ?? null),
                    TextInput::make('precio_total')
                    ->prefix('Q. ')
                    ->readOnly()
                    ->default(fn ($get) => $get('cantidad') * Libro::find($get('id_libro'))),
                
                ])
                //->relationship('pedido_venta_detalles')
                ->columns(4)
                //->disabled()
                ->required()
                ->default([])
                ->afterStateUpdated(function ($state, $set) {
                    // Recalculate the total when the repeater changes
                    $set('monto_total', collect($state)->sum('precio_total'));
                }),

                

            ])->columns(1);

    }

    // // Customize save logic in the resource
    // public static function mutateFormDataBeforeSave(array $data): array
    // {
    //     $pedidoVentaDetalleData = Arr::only($data, ['pedido_venta_detalle.id_libro', 'pedido_venta_detalle.cantidad', 'pedido_venta_detalle.precio', 'pedido_venta_detalle.precio_total']);
    //     unset($data['pedido_venta_detalle.id_libro'], $data['pedido_venta_detalle.cantidad'], $data['pedido_venta_detalle.precio'], $data['pedido_venta_detalle.precio_total']);

    //     return $data;
    // }

    // protected function afterSave(): void
    // {
    //     echo("<script>console.log('before save function ');</script>");

    //     $pedido_venta_detalles = $this->form->getState('pedido_venta_detalles');
    //    $this->record->pedido_venta_detalles()->delete();

    //    echo $pedido_venta_detalles;

    //     foreach ($pedido_venta_detalles as $pedido_venta_detalle) {
    //         $this->record
    //         ->pedido_venta_detalles()
    //         ->updateOrCreate($pedido_venta_detalle); // Create new items
    //         echo("<script>console.log('".$pedido_venta_detalle." ');</script>");
    //     }


    //     $model->pedido_venta_detalles()->updateOrCreate([
    //         'id_libro' => $request->input('id_libro'),
    //         'cantidad' => $request->input('cantidad'),
    //         'precio' => $request->input('precio'),
    //         'precio_total' => $request->input('precio_total'),
    //         'usuario' => Auth::user(),

    //         // $orderData = [
    //         //     'order_number' => $this->form->getState('order_number'),
    //         //     'order_total' => $this->form->getState('order_total'),
    //         //     'customer_id' => $this->record->id, // Link to the customer
    //         // ];
        
    //         \App\Models\PedidoVentaDetalle::updateOrCreate($orderData);
    //     ]);

        
    // }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Tables\Columns\TextColumn::make('cliente.full_name')
                // ->searchable(),
                Tables\Columns\TextColumn::make('cliente.nombre')
                ->searchable(),

                Tables\Columns\TextColumn::make('cliente.apellido')
                ->searchable(),

                Tables\Columns\TextColumn::make('cliente.nit')
                ->searchable(),

                Tables\Columns\TextColumn::make('monto_total')
                    ->numeric()
                    ->money('GTQ')
                    ->sortable(),
                Tables\Columns\TextColumn::make('metodo_pago'),
                //Tables\Columns\TextColumn::make('estado'),
                Tables\Columns\TextColumn::make('fecha_creacion')
                    ->since()
                    ->sortable(),

            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPedidoVentas::route('/'),
            'create' => Pages\CreatePedidoVenta::route('/create'),
            'edit' => Pages\EditPedidoVenta::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
