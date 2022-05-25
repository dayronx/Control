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
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);
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

        return redirect()->route('perfil.index')->with('eliminar','ok');

    }
    //EDITAR
    public function editform(User $user){

        $roles = Role::all()->pluck('name','id');

        $user->load('roles');
      

        return view('perfil.edit', compact('user','roles'));
    }
    //ACTUALIZAR

    public function edit(Request $request, User $user ){
        $data = $request->only('name','apellido','segapellido','cc','email');

        $password = $request->input('password');

        if($password)
            $data['password'] = bcrypt($password);

        $user->update($data);

        

        return redirect()->route('perfil.index')->with('actualizar','ok');
    }

}   
  











