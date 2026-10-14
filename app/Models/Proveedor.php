<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    /** @use HasFactory<\Database\Factories\ProveedorFactory> */
    use HasFactory;
    Protected $fillable = [
        'nombre',
        'nombre_empresa',
        'telefono',
        'activo'
    ];

    public function productos()
    {
        return $this->hasMany(Producto::class, 'id_proveedor');
    }
}
