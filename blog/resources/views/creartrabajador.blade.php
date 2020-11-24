@extends('layouts.template')

@section('seccion')
<h1>Ingresar Trabajador</h1>

<form class="mb-5">
  <div class="form-group">
    <label for="inputNombre"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombre completo</font></font></label>
    <input type="text" class="form-control" name="inputNombre" id="inputNombre" placeholder="nombre">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail">Correo Eléctronico</label>
      <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="cor@hotmail.com">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword">Contraseña</label>
      <input type="password" class="form-control" name="inputPassword" id="inputPassword" placeholder="*******">
    </div>
  </div>
  <div class="form-group">
    <label for="inputDireccion">Direccion</label>
    <input type="text" class="form-control" name="inputDireccion" id="inputDireccion" placeholder="calle # 3">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCiudad">Departamento</label>
      <select  id="inputDepartamentoEmple" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputPoblacion">Ciudad</label>
      <select id="inputCiudad" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" name="inputZip" id="inputZip" placeholder="00000">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" name="notificame" value="check" id="notificame">
      <label class="form-check-label" for="gridCheck">
        Notificarme
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Registrarse</button>
</form>
@endsection