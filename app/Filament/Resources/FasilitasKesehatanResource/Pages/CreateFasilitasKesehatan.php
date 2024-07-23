<?php

namespace App\Filament\Resources\FasilitasKesehatanResource\Pages;

use App\Filament\Resources\FasilitasKesehatanResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFasilitasKesehatan extends CreateRecord
{
    protected static string $resource = FasilitasKesehatanResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

}
