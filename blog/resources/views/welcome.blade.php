@extends('layouts.template')

@section('seccion')
<h1>Crear Departamento</h1>

<p class="mt-3"> esta aplicación es de ingresar, mostrar, editar y eliminar lo que es un CRUD completo</p>

<form>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Departamento</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Administrador</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3">
    </div>
  </div>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0"></legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1">
          <label class="form-check-label" for="gridRadios1">
            Estado (activa o solo creada)
          </label>
        </div>
      </div>
    </div>
  </fieldset>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </div>
</form>

@endsection