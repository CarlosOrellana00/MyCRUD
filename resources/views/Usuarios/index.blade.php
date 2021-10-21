@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD de Usuarios Laravel 8</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('usuarios.create')}}" title="Agregar Usuario"> <i class="fas fa-plus-circle"></i>
                </a>
            </div>
        </div>
    </div>
    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>N°</th>
            <th>RUT</th>
            <th>Nombre y Apellido</th>
            <th>E-mail</th>
            <th>Region</th>
            <th>Opciones</th>
        </tr>
        @foreach ($usuarios as $usuario)
        <tr>
          <td>{{ $usuario->id }}</td>
          <td>{{ $usuario->rut }} </td>
          <td>{{ $usuario->nombre." ".$usuario->apellido }} </td>
          <td>{{ $usuario->correo }} </td>
          <td>{{ $usuario->region->nombre }} </td>
          <td>
              <a href="{{ route('usuarios.show', $usuario->id) }}"  title="show">
                <i class="fas fa-eye text-success fa-lg"></i>
              </a>
              <a href="{{ route('usuarios.edit', $usuario->id) }}">
                <i class="fas fa-edit fa-lg"></i>
              </a>
            <form action="{{route('usuarios.destroy', $usuario->id)}}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" title="delete" style="border: none; background-color:transparent;">
                <i class="fas fa-trash fa-lg text-danger"></i>
              </button>
            </form>
          </td>
        </tr>
        @endforeach
    </table>
@endsection