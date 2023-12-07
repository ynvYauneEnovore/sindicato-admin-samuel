<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asociado extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellido',
        'telefono',
        'email',
        'fecha_ingreso',
        'licencia_conducir',
        'tipo_vehiculo',
        'numero_placa',
        'vehiculo_propio',
    ];
}
