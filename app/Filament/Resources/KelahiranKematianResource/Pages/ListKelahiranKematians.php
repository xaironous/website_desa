<?php

namespace App\Filament\Resources\KelahiranKematianResource\Pages;

use App\Filament\Resources\KelahiranKematianResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKelahiranKematians extends ListRecords
{
    protected static string $resource = KelahiranKematianResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Tambahkan'),
        ];
    }
}
