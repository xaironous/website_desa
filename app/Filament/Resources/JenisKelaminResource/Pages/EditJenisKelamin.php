<?php

namespace App\Filament\Resources\JenisKelaminResource\Pages;

use App\Filament\Resources\JenisKelaminResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJenisKelamin extends EditRecord
{
    protected static string $resource = JenisKelaminResource::class;

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
