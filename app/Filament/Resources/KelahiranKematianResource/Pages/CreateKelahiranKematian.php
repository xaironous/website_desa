<?php

namespace App\Filament\Resources\KelahiranKematianResource\Pages;

use App\Filament\Resources\KelahiranKematianResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateKelahiranKematian extends CreateRecord
{
    protected static string $resource = KelahiranKematianResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

}
