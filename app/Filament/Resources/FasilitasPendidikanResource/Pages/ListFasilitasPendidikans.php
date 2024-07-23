<?php

namespace App\Filament\Resources\FasilitasPendidikanResource\Pages;

use App\Filament\Resources\FasilitasPendidikanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFasilitasPendidikans extends ListRecords
{
    protected static string $resource = FasilitasPendidikanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Tambahkan'),
        ];
    }
}
