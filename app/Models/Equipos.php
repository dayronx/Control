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
        'mantenimiento',
        'prioridad'

    ];

    public function registros(){
        return $this->hasMany('App\Models\Registro', 'equipos_id','id');
    }
    
}


