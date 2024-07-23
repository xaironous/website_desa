<?php

namespace App\Filament\Resources\TingkatPendidikanResource\Pages;

use App\Filament\Resources\TingkatPendidikanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTingkatPendidikan extends EditRecord
{
    protected static string $resource = TingkatPendidikanResource::class;

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
