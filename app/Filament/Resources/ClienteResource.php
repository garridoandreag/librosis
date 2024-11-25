<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClienteResource\Pages;
use App\Filament\Resources\ClienteResource\RelationManagers;
use App\Models\Cliente;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ClienteResource extends Resource
{
    protected static ?string $model = Cliente::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre')
                    ->required()
                    ->maxLength(45),
                Forms\Components\TextInput::make('apellido')
                    ->required()
                    ->maxLength(45),
                Forms\Components\Select::make('tipo')
                    ->options([
                        'Persona' => 'Persona',
                        'Empresa' => 'Empresa',
                    ])->required(),
                Forms\Components\TextInput::make('nit')
                    ->maxLength(8)
                    ->mask('99999999')
                    ->required(),
                Forms\Components\TextInput::make('correo_electronico')
                    ->email()
                    ->maxLength(45),
                Forms\Components\TextInput::make('direccion')
                    ->maxLength(45),
                Forms\Components\TextInput::make('ciudad')
                    ->maxLength(45),
                Forms\Components\TextInput::make('pais')
                    ->maxLength(45),
                // Forms\Components\TextInput::make('estado')
                //     ->required(),
                // Forms\Components\DateTimePicker::make('fecha_creacion'),
                // Forms\Components\DateTimePicker::make('fecha_modificacion'),
                // Forms\Components\DateTimePicker::make('fecha_eliminacion'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('apellido')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tipo'),
                Tables\Columns\TextColumn::make('nit')
                    ->searchable(),
                Tables\Columns\TextColumn::make('correo_electronico')
                    ->searchable(),
                // Tables\Columns\TextColumn::make('direccion')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('ciudad')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('pais')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('estado'),
                Tables\Columns\TextColumn::make('fecha_creacion')
                    ->since(),
                // Tables\Columns\TextColumn::make('fecha_modificacion')
                //     ->dateTime()
                //     ->sortable(),
                // Tables\Columns\TextColumn::make('fecha_eliminacion')
                //     ->dateTime()
                //     ->sortable(),
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
            'index' => Pages\ListClientes::route('/'),
            'create' => Pages\CreateCliente::route('/create'),
            'edit' => Pages\EditCliente::route('/{record}/edit'),
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
