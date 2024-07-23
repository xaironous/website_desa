<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GaleriResource\Pages;
use App\Filament\Resources\GaleriResource\RelationManagers;
use App\Models\Galeri;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GaleriResource extends Resource
{
    protected static ?string $model = Galeri::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = "Berita & Galeri";

    protected static ?string $navigationLabel = 'Galeri Foto';
    protected static ?string $label = 'Galeri Foto';
    protected static ?string $pluralLabel = 'Galeri Foto';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul')->required()->label('Judul Foto'),
                Forms\Components\DateTimePicker::make('tanggal')->required()->label('Tanggal Foto'),
                Forms\Components\FileUpload::make('foto_galeri')->label('Foto'),
                Forms\Components\MarkdownEditor::make('penjelasan')->label('Penjelasan Foto'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul')->label('Judul Foto')->searchable(),
                Tables\Columns\TextColumn::make('tanggal')->label('Tanggal Foto')->sortable(),
                Tables\Columns\ImageColumn::make('foto_galeri')->label('Foto'),
                Tables\Columns\TextColumn::make('penjelasan')->label('Penjelasan Foto')->words(15),
            ])
            ->searchPlaceholder('Cari Judul Foto...')
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
            'index' => Pages\ListGaleris::route('/'),
            'create' => Pages\CreateGaleri::route('/create'),
            'edit' => Pages\EditGaleri::route('/{record}/edit'),
        ];
    }
}
