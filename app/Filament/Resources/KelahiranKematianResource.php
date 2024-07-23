<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KelahiranKematianResource\Pages;
use App\Filament\Resources\KelahiranKematianResource\RelationManagers;
use App\Models\KelahiranKematian;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KelahiranKematianResource extends Resource
{
    protected static ?string $model = KelahiranKematian::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = "Demografi Desa";

    protected static ?string $navigationLabel = 'Dinamika Penduduk';
    protected static ?string $label = 'Dinamika Penduduk';
    protected static ?string $pluralLabel = 'Dinamika Penduduk';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('tahun')->required()->label('Tahun')->unique(ignoreRecord: true),
                Forms\Components\TextInput::make('kelahiran')->required()->label('Angka Kelahiran')->numeric(),
                Forms\Components\TextInput::make('kematian')->required()->label('Angka Kematian')->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tahun')->label('Tahun'),
                Tables\Columns\TextColumn::make('kelahiran')->label('Angka Kelahiran'),
                Tables\Columns\TextColumn::make('kematian')->label('Angka Kematian'),
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
            'index' => Pages\ListKelahiranKematians::route('/'),
            'create' => Pages\CreateKelahiranKematian::route('/create'),
            'edit' => Pages\EditKelahiranKematian::route('/{record}/edit'),
        ];
    }
}
