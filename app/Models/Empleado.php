<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    /** @use HasFactory<\Database\Factories\EmpleadoFactory> */
    use HasFactory;
    protected $fillable = [
        'nombre',
        'apellido',
        'telefono',
        'codigo_empleado',
        'activo',
        'id_departamento'
    ];

    public function departamentos()
    {
        return $this->belongsTo(Departamento::class, 'id_departamento');
    }
}
