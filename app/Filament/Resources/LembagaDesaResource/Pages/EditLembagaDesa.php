<?php

namespace App\Filament\Resources\LembagaDesaResource\Pages;

use App\Filament\Resources\LembagaDesaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLembagaDesa extends EditRecord
{
    protected static string $resource = LembagaDesaResource::class;

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
