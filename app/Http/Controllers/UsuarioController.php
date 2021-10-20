<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Region;
use Illuminate\Http\Request;
use App\Http\Request\UsuarioRequest;

class UsuarioController extends Controller
{
    //
    public function index(){
      $usuarios= Usuario::get();
      return view('usuarios.index',compact('usuarios'));
    }

    public function create(){
      $regiones = Region::get();
      return view('usuarios.create',compact('regiones'));
    }

    public function store(Request $request){
      try {
        $u = new Usuario();
        $u->rut = $request->input('rut');
        $u->nombre = $request->input('nombre');
        $u->apellido = $request->input('apellido');
        $u->correo = $request->input('correo');
        $u->id_region = $request->input('region');
        $u->save();
        return redirect()->route('usuarios.create')->with('success', 'Usuario Creado Exitosamente');
      } catch (\Throwable $th) {
        return $th;
        return back()->with('danger','ERROR! El Usuario no se pudo agregar');
      }
    }

    public function show($id){
      $regiones = Region::get();
      $usuario = Usuario::findOrFail($id);
      return view('usuarios.show', compact('usuario','regiones'));
    }

    public function edit($id){
      $regiones = Region::get();
      $usuario = Usuario::findOrFail($id);
      return view('usuarios.edit', compact('usuario','regiones'));
    }

    public function update(Request $request, $id){
      try {
        $u = Usuario::findOrFail($id);
        $u->nombre = $request->input('nombre');
        $u->apellido = $request->input('apellido');
        $u->correo = $request->input('correo');
        $u->id_region = $request->input('region');
        $u->update();
        return back()->with('success','Felicidades, El Usuario se actualizo exitosamente');
      } catch (\Throwable $th) {
        return $th;
        return back()->with('danger','ERROR! El Usuario no se pudo actualizar');
      }
    }

    public function destroy($id){
      $usuario = Usuario::findOrFail($id);
      $usuario->delete();
      return redirect()->route('usuarios.index')->with('success', 'Usuario Eliminado Exitosamente');
    }
}
