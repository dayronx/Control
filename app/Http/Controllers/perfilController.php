<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class perfilController extends Controller
{
    public function  index(){
        $user=DB::table('users')
        ->select('name', 'email', 'id')
        ->paginate(10);
      
        return view('perfil/index',compact('user'));
    }

    public function  store(Request $request){
        User::create($request->only('name','apellido', 'email', 'password','entidad','profesion','id'));

       


        return redirect()->route('perfil.create');
    }

    public function  create(){
        return view('perfil.create');
    }

    public function delete($id){
        User::destroy($id);

        return redirect()->route('perfil.index');

    }
}   
  











