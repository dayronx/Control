<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use Illuminate\Http\Request;

class registrosController extends Controller
{
    public function reporte(){
    
        return view('equipos.reporte');
    }
    

    public function store2(Request $request){

        Registro::create($request->only('nombreMaquina', 'marca', 'ubicacion','tipoMaquina','tipoMantenimiento','estadoFinal','fotoCambio', 'cambioPiezas','piezaCambiada', 'descripcionMantenimiento', 'imagen', 'nombre', 'apellido', 'telefono', 'correo', 'entidad'));

        return redirect()->route('equipos.reporte');
    }
}
