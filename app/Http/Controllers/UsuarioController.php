<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Region;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //
    public function index(){
      $usuarios= Usuario::get();
      return view('usuarios.index',compact('usuarios'));
    }

    public function create(){
      $regiones = Region::pluck('nombre');
      return view('usuarios.create',compact('regiones'));
    }

    public function store(){

    }

    public function show(){

    }

    public function edit(){

    }

    public function update(){

    }

    public function destroy(){

    }
}
