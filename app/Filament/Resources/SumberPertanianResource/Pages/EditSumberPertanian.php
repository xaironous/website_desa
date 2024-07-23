<?php

namespace App\Filament\Resources\SumberPertanianResource\Pages;

use App\Filament\Resources\SumberPertanianResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSumberPertanian extends EditRecord
{
    protected static string $resource = SumberPertanianResource::class;

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
