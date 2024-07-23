<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LembagaDesaResource\Pages;
use App\Filament\Resources\LembagaDesaResource\RelationManagers;
use App\Models\LembagaDesa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LembagaDesaResource extends Resource
{
    protected static ?string $model = LembagaDesa::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = "Pemerintahan Desa";

    protected static ?string $navigationLabel = 'Lembaga Desa';
    protected static ?string $label = 'Lembaga Desa';
    protected static ?string $pluralLabel = 'Lembaga Desa';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')->required()->label('Nama Lembaga')->unique(ignoreRecord: true),
                Forms\Components\TextInput::make('singkatan')->required()->label('Singkatan'),
                Forms\Components\TextInput::make('alamat')->required()->label('Alamat'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')->label('Nama Lembaga')->searchable(),
                Tables\Columns\TextColumn::make('singkatan')->label('Singkatan')->searchable(),
                Tables\Columns\TextColumn::make('alamat')->label('Alamat')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()->label('Hapus'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListLembagaDesas::route('/'),
            'create' => Pages\CreateLembagaDesa::route('/create'),
            'edit' => Pages\EditLembagaDesa::route('/{record}/edit'),
        ];
    }
}
