<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class CategoriaOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Categorías', \App\Models\Categoria::count()),
            Stat::make('Categorías Activas', \App\Models\Categoria::where('activo', true)->count()),
            Stat::make('Categorías Inactivas', \App\Models\Categoria::where('activo', false)->count()),
        ];
    }
}
