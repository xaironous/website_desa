<?php

namespace App\Filament\Resources\SumberPertanianResource\Pages;

use App\Filament\Resources\SumberPertanianResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSumberPertanians extends ListRecords
{
    protected static string $resource = SumberPertanianResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Tambahkan'),
        ];
    }
}
