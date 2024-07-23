<?php

namespace App\Filament\Resources\SumberPeternakanResource\Pages;

use App\Filament\Resources\SumberPeternakanResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSumberPeternakan extends CreateRecord
{
    protected static string $resource = SumberPeternakanResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

}
