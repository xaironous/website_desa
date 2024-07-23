<?php

namespace App\Filament\Resources\FasilitasPendidikanResource\Pages;

use App\Filament\Resources\FasilitasPendidikanResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFasilitasPendidikan extends CreateRecord
{
    protected static string $resource = FasilitasPendidikanResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

}
