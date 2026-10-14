<?php

namespace App\Filament\Resources\Productos\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class ProductoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre')
                    ->required(),
                Textarea::make('descripcion')
                    ->required()
                    ->columnSpanFull(),
                Select::make('id_categoria')
                    ->relationship('categorias', 'nombre')
                    ->required(),
                Select::make('id_proveedor')
                    ->relationship('proveedors', 'nombre')
                    ->required(),
            ]);
    }
}
