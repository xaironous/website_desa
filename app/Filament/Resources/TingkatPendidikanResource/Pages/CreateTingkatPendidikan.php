<?php

namespace App\Filament\Resources\TingkatPendidikanResource\Pages;

use App\Filament\Resources\TingkatPendidikanResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTingkatPendidikan extends CreateRecord
{
    protected static string $resource = TingkatPendidikanResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

}
