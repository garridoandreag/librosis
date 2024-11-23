<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LibroResource\Pages;
use App\Filament\Resources\LibroResource\RelationManagers;
use App\Models\Libro;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;
use App\Models\Genero;
use App\Models\Autor;

class LibroResource extends Resource
{
    protected static ?string $model = Libro::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('isbn')->label('ISBN')
                    ->required()
                    ->maxLength(13),
                Forms\Components\TextInput::make('titulo')
                    ->required()
                    ->maxLength(50),
                Forms\Components\Select::make('id_genero')
                    ->label('Genero')
                    ->options(Genero::all()->pluck('nombre', 'id_genero'))
                    ->searchable(),
                Forms\Components\Select::make('id_autor')
                    ->label('Autor')
                    ->options(Autor::all()->pluck('nombre', 'id_autor'))
                    ->searchable(),
                Forms\Components\Textarea::make('sinopsis')
                    ->maxLength(200),
                Forms\Components\TextInput::make('precio')
                    ->numeric()
                    ->inputMode('decimal')
                    ->minValue(1)
                    ->maxValue(9999),
                Forms\Components\DatePicker::make('fecha_publicacion'),
                Forms\Components\FileUpload::make('imagen'),
                Forms\Components\Select::make('idioma')
                    ->options([
                        'ES' => 'Español',
                        'EN' => 'Ingles',
                        'OTRO' => 'Otro',
                    ])->required(),
                //Forms\Components\TextInput::make('estado')
                //    ->required(),
                //Forms\Components\DateTimePicker::make('fecha_creacion'),
                //Forms\Components\DateTimePicker::make('fecha_modificacion'),
                //Forms\Components\DateTimePicker::make('fecha_eliminacion'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('isbn')->label('ISBN')
                    ->searchable(),
                Tables\Columns\TextColumn::make('titulo')
                    ->searchable(),
                    Tables\Columns\TextColumn::make('Autor.nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Genero.nombre')
                ->searchable(),
                
                    //Select::make('id_genero')
                    // ->label('Genero')
                    // ->options(Genero::all()->pluck('nombre', 'id_genero'))
                    // ->searchable(),
                // Tables\Columns\TextColumn::make('sinopsis')
                //     ->searchable(),
                Tables\Columns\TextColumn::make('precio')
                    ->numeric()
                    ->money('GTQ')
                    ->sortable(),
                // Tables\Columns\TextColumn::make('fecha_publicacion')
                //     ->date()
                //     ->sortable(),
                
                Tables\Columns\ImageColumn::make('imagen')->size(40)->square(),
                Tables\Columns\TextColumn::make('idioma'),
                // Tables\Columns\TextColumn::make('estado'),
                // Tables\Columns\TextColumn::make('fecha_creacion')
                //     ->dateTime()
                //     ->sortable(),
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
            'index' => Pages\ListLibros::route('/'),
            'create' => Pages\CreateLibro::route('/create'),
            'edit' => Pages\EditLibro::route('/{record}/edit'),
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
