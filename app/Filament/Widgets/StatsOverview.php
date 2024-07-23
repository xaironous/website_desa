<?php

namespace App\Filament\Widgets;

use App\Models\JenisKelamin;
use App\Models\FasilitasPendidikan;
use App\Models\PenggunaanLahan;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Lahan', PenggunaanLahan::sum('jumlah')),
            Stat::make('Total Penduduk', JenisKelamin::sum('jumlah')),
            Stat::make('Fasilitas Pendidikan', FasilitasPendidikan::sum('jumlah')),
        ];
    }
}
