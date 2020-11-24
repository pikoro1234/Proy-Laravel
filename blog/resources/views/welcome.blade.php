@extends('layouts.template')

@section('seccion')
<h1>Crear Departamento</h1>

<p class="mt-3"> esta aplicación es de ingresar, mostrar, editar y eliminar lo que es un CRUD completo</p>

<form action="{{ route('departamentos') }}" method="POST">
  
  @csrf

  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Departamento</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="inputDepartamento" id="inputDepartamento">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Estado</label>
    <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="inputEstado" id="inputEstado" value="chekEstado">
          <label class="form-check-label" for="gridRadios1">(activa o solo creada)</label>
        </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </div>
</form>
@if ( session('mensaje') )
    <div class="alert alert-success">{{ session('mensaje') }}</div>
@endif

@endsection