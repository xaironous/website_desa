<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BeritaResource\Pages;
use App\Filament\Resources\BeritaResource\RelationManagers;
use App\Models\Berita;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BeritaResource extends Resource
{
    protected static ?string $model = Berita::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = "Berita & Galeri";

    protected static ?string $navigationLabel = 'Berita';
    protected static ?string $label = 'Berita';
    protected static ?string $pluralLabel = 'Berita';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul')->required()->label('Judul Berita'),
                Forms\Components\DateTimePicker::make('tanggal')->required()->label('Tanggal Berita'),
                Forms\Components\TextInput::make('penulis')->required()->label('Penulis'),
                Forms\Components\FileUpload::make('foto_berita')->label('Foto'),
                Forms\Components\MarkdownEditor::make('isi_berita')->label('Isi Berita'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul')->label('Judul Berita')->searchable(),
                Tables\Columns\TextColumn::make('tanggal')->label('Tanggal Berita')->sortable(),
                Tables\Columns\TextColumn::make('penulis')->label('Penulis')->searchable(),
                Tables\Columns\ImageColumn::make('foto_berita')->label('Foto'),
                Tables\Columns\TextColumn::make('isi_berita')->label('Isi Berita')->words(15),
            ])
            ->searchPlaceholder('Cari Judul Berita...')
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
            'index' => Pages\ListBeritas::route('/'),
            'create' => Pages\CreateBerita::route('/create'),
            'edit' => Pages\EditBerita::route('/{record}/edit'),
        ];
    }
}
