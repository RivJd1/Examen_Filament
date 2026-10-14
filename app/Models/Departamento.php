<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    /** @use HasFactory<\Database\Factories\DepartamentoFactory> */
    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripcion',
        'activo'
    ];

    public function empleados()
    {
        return $this->hasMany(Empleado::class, 'id_departamento');
    }
}
