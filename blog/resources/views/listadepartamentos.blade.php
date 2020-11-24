@extends('layouts.template')

@section('seccion')
<h1>Listado Departamento</h1>

<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nombre</th>
      <th scope="col">administrador</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>

@endsection