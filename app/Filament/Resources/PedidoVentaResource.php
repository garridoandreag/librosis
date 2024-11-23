<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PedidoVentaResource\Pages;
use App\Filament\Resources\PedidoVentaResource\RelationManagers;
use App\Models\PedidoVenta;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PedidoVentaResource extends Resource
{
    protected static ?string $model = PedidoVenta::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('id_cliente')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('monto_total')
                    ->numeric(),
                Forms\Components\TextInput::make('metodo_pago'),
                Forms\Components\TextInput::make('estado')
                    ->required(),
                Forms\Components\DateTimePicker::make('fecha_creacion'),
                Forms\Components\DateTimePicker::make('fecha_modificacion'),
            ]);
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
