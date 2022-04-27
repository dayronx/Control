<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use JeroenNoten\LaravelAdminLte\View\Components\Form\Select;

use Illuminate\Http\Request;

class ambienteController extends Controller
{
    public function cocina(Request $request){
        $equipos=DB::table('equipos')
        ->select('nombre', 'marca', 'cantidad','tipo', 'ubicacion','estado', 'prioridad','PDF','id')
        ->where('ubicacion', '=', 'Ambiente de Cocina' )
        ->orderBy('nombre', 'asc')
        ->paginate(10);



    return view('ambiente.cocina', compact('equipos'));
    }
    public function bio(Request $request){
        $equipos=DB::table('equipos')
                   ->select('nombre', 'marca', 'cantidad','tipo', 'ubicacion','estado', 'prioridad','PDF','id')
                   ->where('ubicacion', '=', 'Biotecnologia Vegetal' )
                   ->orderBy('nombre', 'asc')
                   ->paginate(10);
        
       
       
               return view('ambiente.bio', compact('equipos'));
    }
    public function carnicos(Request $request){
        $equipos=DB::table('equipos')
        ->select('nombre', 'marca', 'cantidad','tipo', 'ubicacion','estado','prioridad','PDF','id')
        ->where('ubicacion', '=', 'Carnicos' )
        ->orderBy('nombre', 'asc')
        ->paginate(10);



    return view('ambiente.carnicos', compact('equipos'));
    }
    public function cafe(Request $request){
        $equipos=DB::table('equipos')
        ->select('nombre', 'marca', 'cantidad','tipo', 'ubicacion','estado', 'prioridad','PDF','id')
        ->where('ubicacion', '=', 'Laboratorio de Cafe' )
        ->orderBy('nombre', 'asc')
        ->paginate(10);



    return view('ambiente.cafe', compact('equipos'));
    }
 
    public function quimica(Request $request){
        $equipos=DB::table('equipos')
                   ->select('nombre', 'marca', 'cantidad','tipo', 'ubicacion','estado', 'prioridad','PDF','id')
                   ->where('ubicacion', '=', 'Laboratorio de Quimica' )
                   ->orderBy('nombre', 'asc')
                   ->paginate(10);
        
       
       
               return view('ambiente.quimica', compact('equipos'));
    }
    public function micro(Request $request){
        $equipos=DB::table('equipos')
        ->select('nombre', 'marca', 'cantidad','tipo', 'ubicacion','estado','prioridad','PDF','id')
        ->where('ubicacion', '=', 'Laboratorio de Microorganismos' )
        ->orderBy('nombre', 'asc')
        ->paginate(10);



    return view('ambiente.micro', compact('equipos'));
    }
    public function restaurante(Request $request){
        $equipos=DB::table('equipos')
        ->select('nombre', 'marca', 'cantidad','tipo', 'ubicacion','estado','prioridad','PDF','id')
        ->where('ubicacion', '=', 'Restaurante de los Aprendices' )
        ->orderBy('nombre', 'asc')
        ->paginate(10);



    return view('ambiente.restaurante', compact('equipos'));
    }
    public function fruver(Request $request){
        $equipos=DB::table('equipos')
                   ->select('nombre', 'marca', 'cantidad','tipo', 'ubicacion','estado','prioridad','PDF','id')
                   ->where('ubicacion', '=', 'Taller Fruver' )
                   ->orderBy('nombre', 'asc')
                   ->paginate(10);
        
       
       
               return view('ambiente.fruver', compact('equipos'));
    }
    public function lacteos(Request $request){
        $equipos=DB::table('equipos')
                   ->select('nombre', 'marca', 'cantidad','tipo', 'ubicacion','estado', 'prioridad','PDF','id')
                   ->where('ubicacion', '=', 'Taller Lacteos' )
                   ->orderBy('nombre', 'asc')
                   ->paginate(10);
        
       
       
               return view('ambiente.lacteos', compact('equipos'));
    }
    public function panificacion(Request $request){
        $equipos=DB::table('equipos')
        ->select('nombre', 'marca', 'cantidad','tipo', 'ubicacion','estado', 'prioridad','PDF','id')
        ->where('ubicacion', '=', 'Taller de Panificacion' )
        ->orderBy('nombre', 'asc')
        ->paginate(10);



    return view('ambiente.panificacion', compact('equipos'));
    }
    public function produccion(Request $request){
        $equipos=DB::table('equipos')
        ->select('nombre', 'marca', 'cantidad','tipo', 'estado', 'prioridad','ubicacion','PDF','id')
                   ->where('ubicacion', '=', 'Taller de Produccion' )
                   ->orderBy('nombre', 'asc')
                   ->paginate(10);
        
       
       
               return view('ambiente.produccion', compact('equipos'));
    }
  
}
