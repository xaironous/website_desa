<?php

namespace App\Filament\Resources\PenggunaanLahanResource\Pages;

use App\Filament\Resources\PenggunaanLahanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPenggunaanLahans extends ListRecords
{
    protected static string $resource = PenggunaanLahanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Tambahkan'),
        ];
    }
}
