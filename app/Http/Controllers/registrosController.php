<?php

namespace App\Http\Controllers;

use App\Models\Registro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class registrosController extends Controller
{
    public function reporte(){
    
        return view('equipos.reporte');
    }
    

    public function store2(Request $request){

        Registro::create($request->only('nombreMaquina', 'marca', 'ubicacion','tipoMaquina','tipoMantenimiento','estadoFinal','fotoCambio', 'cambioPiezas','piezaCambiada', 'descripcionMantenimiento', 'imagen', 'nombre', 'apellido', 'telefono', 'correo', 'entidad'));

        return redirect()->route('equipos.reporte');
    }

    public function calor(Request $request){

        $registros=DB::table('registros')
        ->select('nombreMaquina')
                   ->orderBy('nombre', 'asc')
                   ->paginate(10);
        
       
       
               return view('equipos.edit2', compact('registros'));
    }
}
