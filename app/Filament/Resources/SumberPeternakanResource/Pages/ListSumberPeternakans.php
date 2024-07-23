<?php

namespace App\Filament\Resources\SumberPeternakanResource\Pages;

use App\Filament\Resources\SumberPeternakanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSumberPeternakans extends ListRecords
{
    protected static string $resource = SumberPeternakanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Tambahkan'),
        ];
    }
}
