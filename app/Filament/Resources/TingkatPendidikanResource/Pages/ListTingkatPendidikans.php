<?php

namespace App\Filament\Resources\TingkatPendidikanResource\Pages;

use App\Filament\Resources\TingkatPendidikanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTingkatPendidikans extends ListRecords
{
    protected static string $resource = TingkatPendidikanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Tambahkan'),
        ];
    }
}
