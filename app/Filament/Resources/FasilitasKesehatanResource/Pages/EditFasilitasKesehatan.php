<?php

namespace App\Filament\Resources\FasilitasKesehatanResource\Pages;

use App\Filament\Resources\FasilitasKesehatanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFasilitasKesehatan extends EditRecord
{
    protected static string $resource = FasilitasKesehatanResource::class;

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
