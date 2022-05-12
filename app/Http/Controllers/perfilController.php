<?php

namespace App\Http\Controllers;

use App\Models\Perfil;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

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

       


        return redirect()->route('perfil.index');
    }

    public function  create(){
        return view('perfil.create');
    }

    public function delete($id){
        User::destroy($id);

        return redirect()->route('perfil.index');

    }
    public function editform($id){
        $usuario = User::findOrFail($id);

        return view('perfil.edit', compact('usuario'));
    }
    public function edit(Request $request, $id){
        $datos = request()->except((['_token', '_method']));
        User::where('id', '=', $id)->update($datos);

        return view('perfil.index');
    }

}   
  











