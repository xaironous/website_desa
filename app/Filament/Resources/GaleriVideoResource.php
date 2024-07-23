<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GaleriVideoResource\Pages;
use App\Filament\Resources\GaleriVideoResource\RelationManagers;
use App\Models\GaleriVideo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GaleriVideoResource extends Resource
{
    protected static ?string $model = GaleriVideo::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = "Berita & Galeri";

    protected static ?string $navigationLabel = 'Galeri Video';
    protected static ?string $label = 'Galeri Video';
    protected static ?string $pluralLabel = 'Galeri Video';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul')->required()->label('Judul'),
                Forms\Components\DateTimePicker::make('tanggal')->required()->label('Tanggal'),
                Forms\Components\TextInput::make('youtubeid')->label('Youtube ID'),
                Forms\Components\MarkdownEditor::make('penjelasan')->label('Penjelasan'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul')->label('Judul')->searchable(),
                Tables\Columns\TextColumn::make('tanggal')->label('Tanggal')->sortable(),
                Tables\Columns\TextColumn::make('youtubeid')->label('Youtube ID'),
                Tables\Columns\TextColumn::make('penjelasan')->label('Penjelasan')->words(15),
            ])
            ->searchPlaceholder('Cari Judul...')
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
            'index' => Pages\ListGaleriVideos::route('/'),
            'create' => Pages\CreateGaleriVideo::route('/create'),
            'edit' => Pages\EditGaleriVideo::route('/{record}/edit'),
        ];
    }
}
