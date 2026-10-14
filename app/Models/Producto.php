<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    /** @use HasFactory<\Database\Factories\ProductoFactory> */
    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripcion',
        'id_categoria',
        'id_proveedor'
    ];

    public function categorias()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }

    public function proveedors()
    {
        return $this->belongsTo(Proveedor::class, 'id_proveedor');
    }
}
