<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SumberPertanianResource\Pages;
use App\Filament\Resources\SumberPertanianResource\RelationManagers;
use App\Models\SumberPertanian;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SumberPertanianResource extends Resource
{
    protected static ?string $model = SumberPertanian::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = "Geografi Desa";

    protected static ?string $navigationLabel = 'Pertanian';
    protected static ?string $label = 'Pertanian';
    protected static ?string $pluralLabel = 'Pertanian';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('jenis')->required()->label('Jenis Pertanian')->unique(ignoreRecord: true),
                Forms\Components\TextInput::make('luas_lahan')->required()->label('Luas Lahan Pertanian')->numeric(),
                Forms\Components\TextInput::make('hasil')->required()->label('Hasil Pertanian (Kg/Ha)'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('jenis')->label('Jenis Pertanian'),
                Tables\Columns\TextColumn::make('luas_lahan')->label('Luas Lahan Pertanian'),
                Tables\Columns\TextColumn::make('hasil')->label('Hasil Pertanian (Kg/Ha)'),
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
            'index' => Pages\ListSumberPertanians::route('/'),
            'create' => Pages\CreateSumberPertanian::route('/create'),
            'edit' => Pages\EditSumberPertanian::route('/{record}/edit'),
        ];
    }
}
