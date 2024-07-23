<?php

namespace App\Filament\Resources\PenggunaanLahanResource\Pages;

use App\Filament\Resources\PenggunaanLahanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPenggunaanLahan extends EditRecord
{
    protected static string $resource = PenggunaanLahanResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }


    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
