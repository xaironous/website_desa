<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PenggunaanLahanResource\Pages;
use App\Filament\Resources\PenggunaanLahanResource\RelationManagers;
use App\Models\PenggunaanLahan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PenggunaanLahanResource extends Resource
{
    protected static ?string $model = PenggunaanLahan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = "Geografi Desa";

    protected static ?string $navigationLabel = 'Penggunaan Lahan';
    protected static ?string $label = 'Penggunaan Lahan';
    protected static ?string $pluralLabel = 'Penggunaan Lahan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')->required()->label('Penggunaan Lahan')->unique(ignoreRecord: true),
                Forms\Components\TextInput::make('jumlah')->required()->label('Luas (Ha)')->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')->label('Penggunaan Lahan'),
                Tables\Columns\TextColumn::make('jumlah')->label('Luas (Ha)'),
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
            'index' => Pages\ListPenggunaanLahans::route('/'),
            'create' => Pages\CreatePenggunaanLahan::route('/create'),
            'edit' => Pages\EditPenggunaanLahan::route('/{record}/edit'),
        ];
    }
}
