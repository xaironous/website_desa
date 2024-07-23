<?php

namespace App\Filament\Resources\SumberPeternakanResource\Pages;

use App\Filament\Resources\SumberPeternakanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSumberPeternakan extends EditRecord
{
    protected static string $resource = SumberPeternakanResource::class;

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
