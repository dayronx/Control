<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class perfilController extends Controller
{
  
    public function  store(){
        return view('perfil/index');
    }

    public function  create(){
        return view('perfil/create');
    }
}
