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
        'PDF',
        'estado',
        'cambioDePiezas',
        'Mantenimiento',
        'foto2',
        'prioridad'

    ];
    
}


