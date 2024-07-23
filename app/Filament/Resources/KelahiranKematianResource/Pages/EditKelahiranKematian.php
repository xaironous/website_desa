<?php

namespace App\Filament\Resources\KelahiranKematianResource\Pages;

use App\Filament\Resources\KelahiranKematianResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKelahiranKematian extends EditRecord
{
    protected static string $resource = KelahiranKematianResource::class;

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
