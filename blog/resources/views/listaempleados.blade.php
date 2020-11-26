@extends('layouts.template')

@section('seccion')
<h1>Listado Empleados</h1>

<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nombre</th>
      <th scope="col">departamento</th>
      <th scope="col">ciudad</th>
      <th scope="col">estado</th>
      <th scope="col">acciones</th>
    </tr>
  </thead>
  <tbody>
    @if($empleados)
        @foreach($empleados as $emple)
        <tr>
          <th scope="row">{{$emple['id']}}</th>
          <td>{{$emple['inputNombre']}}</td>
          <td>{{$emple['inputDepartamentoEmple']}}</td>
          <td>{{$emple['inputCiudadEmple']}}</td>
          <td>
            @if($emple['notificame'])
              {{"activo"}}
            @else
              {{"inactivo"}}
            @endif
          </td>
          <td>
            <a href="{{route('editarEmpleados',$emple['id'])}}" class="btn btn-primary">{{$emple['id']}} Editar</a>
            <a href="" class="btn btn-secondary">{{$emple['id']}} Eliminar</a>
          </td>
        </tr>
        @endforeach
    @endif
  </tbody>
</table>

@endsection