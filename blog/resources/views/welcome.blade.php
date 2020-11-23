@extends('layouts.template')

@section('seccion')
<h1>Ingresar Trabajador</h1>

<p class="mt-3"> esta aplicación es de ingresar, mostrar, editar y eliminar lo que es un CRUD completo</p>

<form class="mb-5">
  <div class="form-group">
    <label for="inputNombre"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombre completo</font></font></label>
    <input type="text" class="form-control" id="inputNombre" placeholder="nombre">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail">Correo Eléctronico</label>
      <input type="email" class="form-control" id="inputEmail" placeholder="cor@hotmail.com">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword">Contraseña</label>
      <input type="password" class="form-control" id="inputPassword" placeholder="*******">
    </div>
  </div>
  <div class="form-group">
    <label for="inputDireccion">Direccion</label>
    <input type="text" class="form-control" id="inputDireccion" placeholder="calle # 3">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCiudad">Ciudad</label>
      <select id="inputCiudad" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputPoblacion">Población</label>
      <select id="inputPoblacion" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip" placeholder="00000">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="notificame">
      <label class="form-check-label" for="gridCheck">
        Notificarme
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Registrarse</button>
</form>

@endsection