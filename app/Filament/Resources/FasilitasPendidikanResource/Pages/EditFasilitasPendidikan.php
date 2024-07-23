<?php

namespace App\Filament\Resources\FasilitasPendidikanResource\Pages;

use App\Filament\Resources\FasilitasPendidikanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFasilitasPendidikan extends EditRecord
{
    protected static string $resource = FasilitasPendidikanResource::class;

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
