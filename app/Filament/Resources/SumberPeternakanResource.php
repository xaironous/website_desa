<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SumberPeternakanResource\Pages;
use App\Filament\Resources\SumberPeternakanResource\RelationManagers;
use App\Models\SumberPeternakan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SumberPeternakanResource extends Resource
{
    protected static ?string $model = SumberPeternakan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = "Geografi Desa";

    protected static ?string $navigationLabel = 'Peternakan';
    protected static ?string $label = 'Peternakan';
    protected static ?string $pluralLabel = 'Peternakan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('jenis')->required()->label('Hewan Ternak')->unique(ignoreRecord: true),
                Forms\Components\TextInput::make('jumlah_ternak')->required()->label('Jumlah Hewan Ternak')->numeric(),
                Forms\Components\TextInput::make('pemilik')->required()->label('Pemilik Peternakan (Orang)')->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('jenis')->label('Hewan Ternak'),
                Tables\Columns\TextColumn::make('jumlah_ternak')->label('Jumlah Hewan Ternak'),
                Tables\Columns\TextColumn::make('pemilik')->label('Pemilik Peternakan (Orang)'),
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
            'index' => Pages\ListSumberPeternakans::route('/'),
            'create' => Pages\CreateSumberPeternakan::route('/create'),
            'edit' => Pages\EditSumberPeternakan::route('/{record}/edit'),
        ];
    }
}
