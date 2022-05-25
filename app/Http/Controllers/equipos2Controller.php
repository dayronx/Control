<?php

namespace App\Http\Controllers;

use App\Models\Equipos;
use App\Models\Registro;
use App\Models\informes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use JeroenNoten\LaravelAdminLte\View\Components\Form\Select;

class equipos2Controller extends Controller
{
       //actualiza maquinas frio
       public function update2(Request $request, Equipos $equipos){
        $request->validate([
            'nombre'       => 'required',
            // 'marca'        => 'required',
            // 'cantidad'     => 'required',
            // 'ubicacion'    => 'required',
            // 'tipo'         => 'required',
            // 'estado'       => 'required',
            // 'prioridad'    => 'required',
            //'descripcion'    => 'required',
           
        
        ]);
        
        $update= $request-> only('nombre', 'marca', 'cantidad','tipo', 'descripcion',  'mantenimiento', 'estado','prioridad');

        $equipos->update($update);

        if($request->hasFile('foto2')){

            if($equipos->foto2 != ''){
                $url = str_replace('storage', 'public', $equipos->foto2);
                Storage::delete($url);
            }

            $arch = $request->file('foto2')->store('public/images');
            $file = Storage::url($arch);
            $equipos->update(['foto2' => $file]); 
        }

        return redirect()->route('equipos.frio')->with('actualizar','ok');
        
    }
}
