@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Agregar un nuevo Usuario</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('usuarios.index') }}" title="volver"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>
    <form action="{{ route('usuarios.store') }}" method="POST" >
        @csrf
        <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Rut:</strong>
                    <input type="text" name="rut" class="form-control" placeholder="11.222.333-5" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="nombre" class="form-control" placeholder="Juan Pablo" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Apellido:</strong>
                    <input type="text" name="apellido" class="form-control" placeholder="Perez" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Correo Eléctronico:</strong>
                    <input type="email" name="correo" class="form-control" placeholder="juanp@gmail.com" required>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Region de Origen:</strong>
                  {{-- <select class="form-control" id="id_region" name="id_region" onChange="CargarComuna()" required> --}}
                  <select class="form-select" aria-label="Default select example" name="region" required>
                    @foreach ($regiones as $r)
                          <option value="{{$r->id}}">"{{$r->nombre}}"</option>
                    @endforeach
                  </select>
              </div>
            </div>




            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </div>
    </form>
@endsection