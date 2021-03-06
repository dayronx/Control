<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;

    protected $fillable = [
        'equipos_id', 
        'marca', 
        'tipoMaquina',
        'tipoMantenimiento',
        'estadoFinal',
        'fotoCambio', 
        'cambioPiezas',
        'piezaCambiada', 
        'descripcionMantenimiento',
        'imagen',
        'nombre',
        'apellido',
        'telefono', 
        'correo',
        'entidad',
        'ubicacion'

    ];


    public function equipos(){
        return $this->belongsTo('App\Models\Equipos','equipos_id', 'id');
    }

}
