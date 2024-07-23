<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JenisPekerjaanResource\Pages;
use App\Filament\Resources\JenisPekerjaanResource\RelationManagers;
use App\Models\JenisPekerjaan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JenisPekerjaanResource extends Resource
{
    protected static ?string $model = JenisPekerjaan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = "Demografi Desa";

    protected static ?string $navigationLabel = 'Berdasarkan Jenis Pekerjaan';
    protected static ?string $label = 'Berdasarkan Jenis Pekerjaan';
    protected static ?string $pluralLabel = 'Berdasarkan Jenis Pekerjaan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('pekerjaan')->required()->label('Pekerjaan')->unique(ignoreRecord: true),
                Forms\Components\TextInput::make('jumlah')->required()->label('Jumlah')->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('pekerjaan')->label('Pekerjaan'),
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
            'index' => Pages\ListJenisPekerjaans::route('/'),
            'create' => Pages\CreateJenisPekerjaan::route('/create'),
            'edit' => Pages\EditJenisPekerjaan::route('/{record}/edit'),
        ];
    }
}
