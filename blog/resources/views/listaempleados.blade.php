@extends('layouts.template')

@section('seccion')
<h1>Listado Empleados</h1>

<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nombre</th>
      <th scope="col">correo</th>
      <th scope="col">contraseña</th>
      <th scope="col">dirección</th>
      <th scope="col">ciudad</th>
      <th scope="col">codigo postal</th>
      <th scope="col">id empresa</th>
      <th scope="col">acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>Mark</td>
      <td>Mark</td>
      <td>
        <button type="button" class="btn btn-primary">Editar</button>
        <button type="button" class="btn btn-secondary">Eliminar</button>
      </td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>Mark</td>
      <td>
        <button type="button" class="btn btn-primary">Editar</button>
        <button type="button" class="btn btn-secondary">Eliminar</button>
      </td>
    </tr>
  </tbody>
</table>

@endsection