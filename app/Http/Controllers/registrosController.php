<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use Illuminate\Http\Request;

class registrosController extends Controller
{
    public function reporte(Request $request){
      

        Registro::create($request->only('nombreMaquina', 'marca', 'tipoMaquina','tipoMantenimiento','estadoFinal','fotoCambio', 'cambioPiezas','PiezaCambiada', 'descripcionMantenimiento', 'imagen', 'nombre', 'apellido', 'telefono', 'correo', 'entidad')

        );

       


        return redirect()->route('equipos.reporte');
    }
}
