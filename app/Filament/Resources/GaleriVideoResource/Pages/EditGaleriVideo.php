<?php

namespace App\Filament\Resources\GaleriVideoResource\Pages;

use App\Filament\Resources\GaleriVideoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGaleriVideo extends EditRecord
{
    protected static string $resource = GaleriVideoResource::class;

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
