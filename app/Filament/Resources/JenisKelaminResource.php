<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JenisKelaminResource\Pages;
use App\Filament\Resources\JenisKelaminResource\RelationManagers;
use App\Models\JenisKelamin;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JenisKelaminResource extends Resource
{
    protected static ?string $model = JenisKelamin::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = "Demografi Desa";

    protected static ?string $navigationLabel = 'Berdasarkan Jenis Kelamin';
    protected static ?string $label = 'Berdasarkan Jenis Kelamin';
    protected static ?string $pluralLabel = 'Berdasarkan Jenis Kelamin';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('jenis')->required()->label('Jenis Kelamin')->unique(ignoreRecord: true),
                Forms\Components\TextInput::make('jumlah')->required()->label('Jumlah')->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('jenis')->label('Jenis Kelamin'),
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
            'index' => Pages\ListJenisKelamins::route('/'),
            'create' => Pages\CreateJenisKelamin::route('/create'),
            'edit' => Pages\EditJenisKelamin::route('/{record}/edit'),
        ];
    }
}
