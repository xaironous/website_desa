<?php

namespace App\Filament\Resources\SumberPertanianResource\Pages;

use App\Filament\Resources\SumberPertanianResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSumberPertanian extends CreateRecord
{
    protected static string $resource = SumberPertanianResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

}
