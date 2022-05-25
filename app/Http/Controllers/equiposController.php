<?php

namespace App\Http\Controllers;

use App\Models\Equipos;
use App\Models\Registro;
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
 
   
    public function store(Request $request){
        $request->validate([
            'nombre'       => 'required',
            'nombre'       => 'required',
            'marca'        => 'required',
            'cantidad'     => 'required',
            'ubicacion'    => 'required',
            'descripcion'  => 'required',
            'foto'         => 'required',
            'tipo'         => 'required',
            'estado'       => 'required',
            'PDF'          => 'required',
            'mantenimiento'=> 'required',
            'prioridad'    => 'required',
           
        
        ]);

        $arch = $request->file('foto')->store('public/images');
        $file = Storage::url($arch);

        $arch2 = $request->file('PDF')->store('public/pdf');
        $pdf = Storage::url($arch2);

        Equipos::create($request->only('nombre', 'marca', 'cantidad','tipo','ubicacion','estado', 'mantenimiento','descripcion', 'prioridad')+[
            'foto' => $file,
            'PDF' => $pdf

        ]);

       


        return redirect()->route('equipos.create')->with('crear','ok');

    }

    public function reporte(Request $request){
      

        Registro::create($request->only('nombreMaquina', 'marca', 'tipoMaquina','tipoMantenimiento','estadoFinal','fotoCambio', 'cambioPiezas','PiezaCambiada', 'descripcionMantenimiento', 'imagen', 'nombre', 'apellido', 'telefono', 'correo', 'entidad')

        );

       


        return redirect()->route('equipos.reporte');
    }
    public function edit(Equipos $equipos){
        
        return view('equipos.edit', compact('equipos'));
        
    }

    public function edit2(Equipos $equipos){

        $registros = Registro::all();
        $registros->each(function($registro){
            $registro->equipos;
        });
        return view('equipos.edit2', compact('equipos','registros'));

    }

    //actualiza maquinas de calor
    public function update(Request $request, Equipos $equipos){
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

        return redirect()->route('equipos.calor')->with('actualizar','ok');
        
    }
    

    

    public function destroy(Equipos $equipos){
        $file = str_replace('storage', 'public', $equipos->foto);
        Storage::delete($file);

        $url = str_replace('storage', 'public', $equipos->foto2);
        Storage::delete($url);

        $arch2 = str_replace('storage', 'public', $equipos->PDF);
        Storage::delete($arch2);
        
        $equipos->delete();  
        return redirect()->back()->with('eliminar','ok');
    }

    public function calor(Request $request){

        $equipos=DB::table('equipos')
        ->select('nombre', 'marca', 'cantidad','tipo', 'ubicacion','estado','prioridad','PDF','id')
                   ->where('tipo', '=', 'calor' )
                   ->orderBy('nombre', 'asc')
                   ->paginate(10);
        
       
       
               return view('equipos.calor', compact('equipos'));
    }
    public function  alerta(){
        return view('equipos.alerta');
    }

}
