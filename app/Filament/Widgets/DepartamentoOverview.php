<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DepartamentoOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Departamentos', \App\Models\Departamento::count()),
            Stat::make('Departamentos Activos', \App\Models\Departamento::where('activo', true)->count()),
            Stat::make('Departamentos Inactivos', \App\Models\Departamento::where('activo', false)->count()),
        ];
    }
}
