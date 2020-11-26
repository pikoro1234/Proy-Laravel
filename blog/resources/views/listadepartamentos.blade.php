@extends('layouts.template')

@section('seccion')
<h1>Listado Departamento</h1>

<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nombre</th>
      <th scope="col">ciudad</th>
      <th scope="col">estado</th>
      <th scope="col">administrador</th>
    </tr>
  </thead>
  <tbody>

  @if($departamentos)
    @foreach($departamentos as $depart)

    <tr>
      <th scope="row">{{$depart['id']}}</th>
      <td>{{$depart['inputDepartamento']}}</td>
      <td>{{$depart['inputCiudad']}}</td>
      <td>
        @if($depart['inputEstado'])
          {{"activo"}}
        @else
          {{"inactivo"}}
        @endif
      </td>
      <td>{{$depart['adminDepart']}}</td>
    </tr>

    @endforeach
  @endif
  </tbody>
</table>

@endsection