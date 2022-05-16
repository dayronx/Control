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

    public function  store(Request $request ){
        $user= User::create($request->only('name', 'email')+[
            'password'=>bcrypt($request->input('password'))
        ]);

        $roles = $request->input('roles',[]);

        $user->syncRoles($roles);


        return redirect()->route('perfil.index');
    }

    public function  create(){
        $roles = Role::all()->pluck('name','id');
        return view('perfil.create' , compact('roles'));
    }

    public function delete($id){
        User::destroy($id);

        return redirect()->route('perfil.index');

    }
    //EDITAR
    public function editform(User $user){

        $roles = Role::all()->pluck('name','id');

        $user->load('roles');
      

        return view('perfil.edit', compact('user','roles'));
    }
    //ACTUALIZAR

    public function edit(Request $request, $id){
        $datos = request()->except((['_token', '_method']));
        User::where('id', '=', $id)->update($datos);

        return redirect()->route('perfil.index');
    }

}   
  











