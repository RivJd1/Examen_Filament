<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class EmpleadoOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Empleados', \App\Models\Empleado::count()),
            Stat::make('Empleados Activos', \App\Models\Empleado::where('activo', true)->count()),
            Stat::make('Empleados Inactivos', \App\Models\Empleado::where('activo', false)->count()),
        ];
    }
}
