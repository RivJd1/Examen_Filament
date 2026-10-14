<?php

namespace App\Filament\Resources\Empleados\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class EmpleadoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre')
                    ->required(),
                TextInput::make('apellido')
                    ->required(),
                TextInput::make('telefono')
                    ->tel()
                    ->required(),
                TextInput::make('codigo_empleado')
                    ->required(),
                Toggle::make('activo')
                    ->required(),
                Select::make('id_departamento')
                    ->relationship('departamentos', 'nombre')
                    ->required(),
            ]);
    }
}
