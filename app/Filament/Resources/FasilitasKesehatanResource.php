<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FasilitasKesehatanResource\Pages;
use App\Filament\Resources\FasilitasKesehatanResource\RelationManagers;
use App\Models\FasilitasKesehatan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FasilitasKesehatanResource extends Resource
{
    protected static ?string $model = FasilitasKesehatan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = "Geografi Desa";

    protected static ?string $navigationLabel = 'Fasilitas Kesehatan';
    protected static ?string $label = 'Fasilitas Kesehatan';
    protected static ?string $pluralLabel = 'Fasilitas Kesehatan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')->required()->label('Fasilitas Kesehatan')->unique(ignoreRecord: true),
                Forms\Components\TextInput::make('jumlah')->required()->label('Jumlah')->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')->label('Fasilitas Kesehatan'),
                Tables\Columns\TextColumn::make('jumlah')->label('Jumlah'),
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
            'index' => Pages\ListFasilitasKesehatans::route('/'),
            'create' => Pages\CreateFasilitasKesehatan::route('/create'),
            'edit' => Pages\EditFasilitasKesehatan::route('/{record}/edit'),
        ];
    }
}
