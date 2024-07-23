<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TingkatPendidikanResource\Pages;
use App\Filament\Resources\TingkatPendidikanResource\RelationManagers;
use App\Models\TingkatPendidikan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TingkatPendidikanResource extends Resource
{
    protected static ?string $model = TingkatPendidikan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = "Demografi Desa";

    protected static ?string $navigationLabel = 'Berdasarkan Tingkat Pendidikan';
    protected static ?string $label = 'Berdasarkan Tingkat Pendidikan';
    protected static ?string $pluralLabel = 'Berdasarkan Tingkat Pendidikan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('tingkat')->required()->label('Tingkat Pendidikan')->unique(ignoreRecord: true),
                Forms\Components\TextInput::make('jumlah')->required()->label('Jumlah')->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tingkat')->label('Tingkat Pendidikan'),
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
            'index' => Pages\ListTingkatPendidikans::route('/'),
            'create' => Pages\CreateTingkatPendidikan::route('/create'),
            'edit' => Pages\EditTingkatPendidikan::route('/{record}/edit'),
        ];
    }
}
