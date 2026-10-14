<?php

namespace App\Filament\Resources\Proveedors\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ProveedorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre')
                    ->required(),
                TextInput::make('nombre_empresa')
                    ->required(),
                TextInput::make('telefono')
                    ->tel()
                    ->required(),
                Toggle::make('activo')
                    ->required(),
            ]);
    }
}
