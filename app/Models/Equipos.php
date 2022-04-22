<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipos extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'marca',
        'cantidad',
        'ubicacion',
        'descripcion',
        'foto',
        'tipo',
        'estado',
        'PDF',
        'estadoFinal',
        'cambioDePiezas',
        'Mantenimiento',
        'foto2',
        'prioridad'

    ];
    
}


