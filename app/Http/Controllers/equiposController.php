<?php

namespace App\Http\Controllers;

use App\Models\Equipos;
use App\Models\informes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use JeroenNoten\LaravelAdminLte\View\Components\Form\Select;

class equiposController extends Controller

{
 

    public function index(Request $request){
        $equipos=DB::table('equipos')
        ->select('nombre', 'marca', 'cantidad','tipo', 'estado','ubicacion', 'prioridad','PDF','id')
        ->where('tipo', '=', 'frio' )
        ->orderBy('nombre', 'asc')
        ->paginate(10);



       return view('equipos.index', compact('equipos'));
        
       
       
    }

    public function create(){
        return view('equipos.create');
    }
    public function reporte(informes $informes){
        
        informes::create($informes->only('nombre','apellido','telefono','entidad','correo')
           

        );
        return view ('equipos.reporte' , compact('informes'));
    }

    public function store(Request $request){

        $arch = $request->file('foto')->store('public/images');
        $file = Storage::url($arch);

        $arch2 = $request->file('PDF')->store('public/pdf');
        $pdf = Storage::url($arch2);

        Equipos::create($request->only('nombre', 'marca', 'cantidad','tipo','ubicacion','estado', 'Mantenimiento','descripcion', 'prioridad')+[
            'foto' => $file,
            'PDF' => $pdf

        ]);

       


        return redirect()->route('equipos.create');

    }

    public function edit(Equipos $equipos){
        
        return view('equipos.edit', compact('equipos'));
        
    }

    public function edit2(Equipos $equipos){
  
        return view('equipos.edit2', compact('equipos'));

    }
    public function update(Request $request, Equipos $equipos){
        
        $update= $request-> only('nombre', 'marca', 'cantidad','tipo', 'descripcion', 'cambioDePiezas', 'Mantenimiento', 'estado','prioridad');

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

        return redirect()->route('equipos');
        
    }
    public function destroy(Equipos $equipos){
        $file = str_replace('storage', 'public', $equipos->foto);
        Storage::delete($file);

        $url = str_replace('storage', 'public', $equipos->foto2);
        Storage::delete($url);

        $arch2 = str_replace('storage', 'public', $equipos->PDF);
        Storage::delete($arch2);
        
        $equipos->delete();  
        return redirect()->back();
    }

    public function calor(Request $request){

        $equipos=DB::table('equipos')
        ->select('nombre', 'marca', 'cantidad','tipo', 'ubicacion','estado','prioridad','PDF','id')
                   ->where('tipo', '=', 'calor' )
                   ->orderBy('nombre', 'asc')
                   ->paginate(10);
        
       
       
               return view('equipos.calor', compact('equipos'));
    }

}
