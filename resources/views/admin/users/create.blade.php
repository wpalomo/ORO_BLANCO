@extends('layouts.dashboard')

@section('title')
  Crear Usuario
@endsection

@section('content')
  @if(Session::has('message'))
    <div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      {{ Session::get('message') }}
    </div>
  @endif
  <h1>Crear Usuario</h1>
  <form class="form-horizontal" method="POST" action="{{ url('/admin/usuarios') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">
      <label for="tbUser" class="col-sm-2 control-label">Usuario:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="tbUser" name="tbUser" placeholder="Usuario">
        <span class="help-block">Ingrese el usuario para el inicio de sesión.</span>
      </div>
    </div>
    <div class="form-group">
      <label for="tbPassword" class="col-sm-2 control-label">Contraseña:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="tbPassword" name="tbPassword" placeholder="Contraseña">
      </div>
    </div>
    <div class="form-group">
      <label for="tbDNI" class="col-sm-2 control-label">DNI:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="tbDNI" name="tbDNI" placeholder="DNI">
      </div>
    </div>
    <div class="form-group">
      <label for="tbFirstName" class="col-sm-2 control-label">Nombres:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="tbFirstName" name="tbFirstName" placeholder="Nombres">
      </div>
    </div>
    <div class="form-group">
      <label for="tbLastName" class="col-sm-2 control-label">Apellidos:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="tbLastName" name="tbLastName" placeholder="Apellidos">
      </div>
    </div>
    <div class="form-group">
      <label for="selRole" class="col-sm-2 control-label">Rol:</label>
      <div class="col-sm-10">
        <select class="form-control" id="selRole" name="selRole">
          <option>Administrador</option>
          <option>Ventas</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </form>
@endsection
