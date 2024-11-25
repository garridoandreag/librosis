<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PedidoVentaDetalleResource\Pages;
use App\Filament\Resources\PedidoVentaDetalleResource\RelationManagers;
use App\Models\PedidoVentaDetalle;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PedidoVentaDetalleResource extends Resource
{
    protected static ?string $model = PedidoVentaDetalle::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('id_pedido_venta')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('id_libro')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('cantidad')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('precio')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('precio_total')
                    ->numeric(),
                // Forms\Components\DateTimePicker::make('fecha_creacion'),
                // Forms\Components\DateTimePicker::make('fecha_modificacion'),
                // Forms\Components\TextInput::make('usuario')
                    // ->maxLength(45),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id_pedido_venta')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('id_libro')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('cantidad')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('precio')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('precio_total')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('fecha_creacion')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('fecha_modificacion')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('usuario')
                    ->searchable(),
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
            'index' => Pages\ListPedidoVentaDetalles::route('/'),
            'create' => Pages\CreatePedidoVentaDetalle::route('/create'),
            'edit' => Pages\EditPedidoVentaDetalle::route('/{record}/edit'),
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
