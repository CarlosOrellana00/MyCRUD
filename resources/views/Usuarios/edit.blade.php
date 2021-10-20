@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Usuario</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('usuarios.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>
    <form action="{{ route('usuarios.update', $usuario->id) }}" method="Post">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Rut:</strong>
                    <input type="text" name="rut" class="form-control" value="{{ $usuario->rut }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="nombre" class="form-control" value="{{$usuario->nombre}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Apellido:</strong>
                    <input type="text" name="apellido" class="form-control" value="{{$usuario->apellido}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Correo Eléctronico:</strong>
                    <input type="email" name="correo" class="form-control" value="{{$usuario->correo}}" placeholder="juanp@gmail.com">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                <strong>Region de Origen:</strong>
                <select class="form-select" aria-label="Default select example" name="region" required>
                  @foreach ($regiones as $r)
                      @if ($r->id == $usuario->id_region)
                        <option selected value="{{$r->id}}">{{$r->nombre}}</option>
                      @else
                        <option value="{{$r->id}}">{{$r->nombre}}</option>
                      @endif
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </div>
    </form>
@endsection