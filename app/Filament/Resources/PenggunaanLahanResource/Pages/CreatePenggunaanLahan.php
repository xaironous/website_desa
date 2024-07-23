<?php

namespace App\Filament\Resources\PenggunaanLahanResource\Pages;

use App\Filament\Resources\PenggunaanLahanResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePenggunaanLahan extends CreateRecord
{
    protected static string $resource = PenggunaanLahanResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

}
