<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ProveedorOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Proveedores', \App\Models\Proveedor::count()),
            Stat::make('Proveedores Activos', \App\Models\Proveedor::where('activo', true)->count()),
            Stat::make('Proveedores Inactivos', \App\Models\Proveedor::where('activo', false)->count()),
        ];
    }
}
