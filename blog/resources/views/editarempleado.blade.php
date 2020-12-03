@extends('layouts.template')

@section('seccion')

<h1>Editar Empleado</h1>

<br>

  @if ( session('mensaje') )
      <div class="alert alert-success">{{ session('mensaje') }}</div>
  @endif

<br>

<div class="containers d-flex w-100">
  <div class="card w-50 p-5 m-3">
    <h3 class="text-center mb-5">Datos Actuales</h3>
    <form class="mb-5">
      <input type="text" class="form-group col-md-12" placeholder="{{$datosTrabajador->inputNombre}}" disabled>

      <input type="text" class="form-group col-md-12" placeholder="{{$datosTrabajador->inputEmail}}" disabled>

      <input type="text" class="form-group col-md-12" placeholder="{{$datosTrabajador->inputDireccion}}" disabled>

      <input type="text" class="form-group col-md-12" placeholder="{{$datosTrabajador->inputDepartamentoEmple}}" disabled>

      <input type="text" class="form-group col-md-12" placeholder="{{$datosTrabajador->inputCiudadEmple}}" disabled>

      <input type="text" class="form-group col-md-12" placeholder="{{$datosTrabajador->inputZip}}" disabled>
      
      <input type="text" class="form-group col-md-12" placeholder="{{$datosTrabajador->notificame}}" disabled>
    </form>
  </div>


  <div class="card w-50 p-5 m-3">
  <h3 class="text-center mb-5">Datos a modificar</h3>
    <form class="mb-5" method="POST" action="{{route ('editarempleado',$datosTrabajador->id)}}">
      
      @csrf

        <input type="text" name="inputNombre" id="inputNombre" class="form-group col-md-12" placeholder="nombre"><br>

        <input type="text" name="inputEmail" id="inputEmail" class="form-group col-md-12" placeholder="email"><br>

        <input type="text" name="inputDireccion" id="inputDireccion" class="form-group col-md-12" placeholder="dirección">

        <div class="form-group col-md-12">
          <label for="inputCiudad">Departamentos</label>
          <select name="inputDepartamentoEmple" id="inputDepartamentoEmple" class="form-group col-md-12">
            <option value="trash">Selecciona departamento</option>
            @if ($departamentos)
              @foreach($departamentos as $depart)
              <option value="{{$depart['inputDepartamento']}}">{{$depart['inputDepartamento']}}</option>
              @endforeach
            @endif
          </select>
        </div>

        <div class="form-group col-md-12">
          <label for="inputPoblacion">Ciudad</label>
          <select id="inputCiudadEmple" name="inputCiudadEmple" class="form-group col-md-12">
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

        <input type="text" name="inputZip" id="inputZip" class="form-group col-md-12" placeholder=" codigo postal"><br>

        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="notificame" value="check" id="notificame">
            <label class="form-check-label" for="gridCheck">
              Notificarme
            </label>
          </div>
        </div>

        <input type="submit" value="Actualizar" class="btn btn-primary mt-3">
      </form>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>

@endsection