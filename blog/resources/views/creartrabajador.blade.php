@extends('layouts.template')

@section('seccion')
<h1>Ingresar Trabajador</h1>

<br>

@if ( session('mensaje') )
    <div class="alert alert-success">{{ session('mensaje') }}</div>
@endif

<br>

<form class="mb-5" method="POST" action="{{route ('crearEmpleado')}}">

  @csrf

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
      <label for="inputCiudad">Departamentos</label>
      <select name="inputDepartamentoEmple" id="inputDepartamentoEmple" class="form-control">
        <option value="trash">Selecciona departamento</option>
        @if ($departamentos)
          @foreach($departamentos as $depart)
            <option value="{{$depart['inputDepartamento']}}">{{$depart['inputDepartamento']}}</option>
          @endforeach
        @endif
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="inputPoblacion">Ciudad</label>
      <select id="inputCiudadEmple" name="inputCiudadEmple" class="form-control">
        <option value="">Seleccione ciudad</option>
        <option value="Barcelona">Barcelona</option>
        <option value="Madrid">Madrid</option>
        <option value="Sevilla">Sevilla</option>
        <option value="Malaga">Malaga</option>
        <option value="Bilbao">Bilbao</option>
        <option value="Mursia">Mursia</option>
        <option value="Asturias">Asturias</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Codigo postal</label>
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