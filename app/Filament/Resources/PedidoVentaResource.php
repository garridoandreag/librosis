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
use Filament\Pages\Concerns\InteractsWithFormActions;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Infolists\Components\Grid;

class PedidoVentaResource extends Resource
{
    protected static ?string $model = PedidoVenta::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    use InteractsWithFormActions;

    public static function form(Form $form): Form
    {

        return $form
            ->schema([
                Select::make('id_cliente')
                    ->label('Cliente')
                    ->options(Cliente::all()->pluck('full_name', 'id_cliente'))
                    ->searchable()
                    ->required(),
                //Forms\Components\TextInput::make('metodo_pago'),
                // Forms\Components\TextInput::make('estado')
                //     ->required()

                Forms\Components\Select::make('metodo_pago')
                ->options([
                    'TARJETA' => 'Tarjeta',
                    'EFECTIVO' => 'Efectivo',
                    'TARJETA DE REGALO' => 'Tarjeta de Regalo',
                    'CREDITO' => 'Credito',
                ])->required(),
                
                TextInput::make('monto_total')
                ->prefix('Q. ')
                ->disabled()
                ->numeric()
                ->default(0),

                
                Repeater::make('producto')
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
                ->columns(4)
                ->afterStateUpdated(function ($state, $set) {
                    // Recalculate the total when the repeater changes
                    $set('monto_total', collect($state)->sum('precio_total'));
                }),

                

            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id_cliente')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('monto_total')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('metodo_pago'),
                Tables\Columns\TextColumn::make('estado'),
                Tables\Columns\TextColumn::make('fecha_creacion')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('fecha_modificacion')
                    ->dateTime()
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
