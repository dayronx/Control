<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use JeroenNoten\LaravelAdminLte\View\Components\Form\Select;

use Illuminate\Http\Request;

class ambienteController extends Controller
{
    public function cocina(Request $request){
        $equipos=DB::table('equipos')
        ->select('nombre', 'marca', 'cantidad','tipo', 'descripcion','PDF')
        ->where('ubicacion', '=', 'cocina' )
        ->where('ubicacion', '=', 'COCINA' )
        ->orderBy('nombre', 'asc')
        ->paginate(10);



    return view('ambiente.cocina', compact('equipos'));
    }
    public function bio(Request $request){
        $equipos=DB::table('equipos')
                   ->select('nombre', 'marca', 'cantidad','tipo', 'descripcion','PDF')
                   ->where('ubicacion', '=', 'biotecnologia' )
                   ->orderBy('nombre', 'asc')
                   ->paginate(10);
        
       
       
               return view('ambiente.bio', compact('equipos'));
    }
    public function carnicos(Request $request){
        $equipos=DB::table('equipos')
        ->select('nombre', 'marca', 'cantidad','tipo', 'descripcion','PDF')
        ->where('ubicacion', '=', 'carnicos' )
        ->orderBy('nombre', 'asc')
        ->paginate(10);



    return view('ambiente.carnicos', compact('equipos'));
    }
    public function cafe(Request $request){
        $equipos=DB::table('equipos')
        ->select('nombre', 'marca', 'cantidad','tipo', 'descripcion','PDF')
        ->where('ubicacion', '=', 'cafe' )
        ->orderBy('nombre', 'asc')
        ->paginate(10);



    return view('ambiente.cafe', compact('equipos'));
    }
 
    public function quimica(Request $request){
        $equipos=DB::table('equipos')
                   ->select('nombre', 'marca', 'cantidad','tipo', 'descripcion','PDF')
                   ->where('ubicacion', '=', 'quimica' )
                   ->orderBy('nombre', 'asc')
                   ->paginate(10);
        
       
       
               return view('ambiente.quimica', compact('equipos'));
    }
    public function micro(Request $request){
        $equipos=DB::table('equipos')
        ->select('nombre', 'marca', 'cantidad','tipo', 'descripcion','PDF')
        ->where('ubicacion', '=', 'microorganismos' )
        ->orderBy('nombre', 'asc')
        ->paginate(10);



    return view('ambiente.micro', compact('equipos'));
    }
    public function restaurante(Request $request){
        $equipos=DB::table('equipos')
        ->select('nombre', 'marca', 'cantidad','tipo', 'descripcion','PDF')
        ->where('ubicacion', '=', 'restaurante' )
        ->orderBy('nombre', 'asc')
        ->paginate(10);



    return view('ambiente.restaurante', compact('equipos'));
    }
    public function fruver(Request $request){
        $equipos=DB::table('equipos')
                   ->select('nombre', 'marca', 'cantidad','tipo', 'descripcion','PDF')
                   ->where('ubicacion', '=', 'fruver' )
                   ->orderBy('nombre', 'asc')
                   ->paginate(10);
        
       
       
               return view('ambiente.fruver', compact('equipos'));
    }
    public function lacteos(Request $request){
        $equipos=DB::table('equipos')
                   ->select('nombre', 'marca', 'cantidad','tipo', 'descripcion','PDF')
                   ->where('ubicacion', '=', 'lacteos' )
                   ->orderBy('nombre', 'asc')
                   ->paginate(10);
        
       
       
               return view('ambiente.lacteos', compact('equipos'));
    }
    public function panificacion(Request $request){
        $equipos=DB::table('equipos')
        ->select('nombre', 'marca', 'cantidad','tipo', 'descripcion','PDF')
        ->where('ubicacion', '=', 'panificacion' )
        ->orderBy('nombre', 'asc')
        ->paginate(10);



    return view('ambiente.panificacion', compact('equipos'));
    }
    public function produccion(Request $request){
        $equipos=DB::table('equipos')
                   ->select('nombre', 'marca', 'cantidad','tipo', 'descripcion','PDF')
                   ->where('ubicacion', '=', 'produccion' )
                   ->orderBy('nombre', 'asc')
                   ->paginate(10);
        
       
       
               return view('ambiente.produccion', compact('equipos'));
    }
  
}
