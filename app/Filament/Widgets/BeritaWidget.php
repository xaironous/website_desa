<?php

namespace App\Filament\Widgets;

use App\Models\Berita;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class BeritaWidget extends BaseWidget
{
    protected static ?int $sort = 2;
    protected int | string | array $columnSpan = 'full';
    
    public function table(Table $table): Table
    {
        return $table
            ->query(
                Berita::query()
                ->latest()
                ->limit(5)
            )
            ->columns([
                Tables\Columns\TextColumn::make('judul')->label('Judul Berita'),
                Tables\Columns\TextColumn::make('tanggal')->label('Tanggal Berita'),
                Tables\Columns\ImageColumn::make('foto_berita')->label('Foto'),
                Tables\Columns\TextColumn::make('isi_berita')->label('Isi Berita')->words(15),
            ]);
    }
}
