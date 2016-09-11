@extends('layouts.dashboard')

@section('title')
  Crear Producto
@endsection

@section('content')
  <div class="col-sm-8">
    <h1>Crear Productos</h1>
    <form class="form-horizontal" method="POST" action="{{ url('/admin/productos') }}">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <label for="tbCodigo" class="col-sm-2 control-label">Código:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="tbCodigo" name="tbCodigo" placeholder="Código de Producto">
        </div>
      </div>
      <div class="form-group">
        <label for="tbDescripcion" class="col-sm-2 control-label">Descripción:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="tbDescripcion" name="tbDescripcion" placeholder="Descripcion">
        </div>
      </div>
      <div class="form-group">
        <label for="tbDescripcionCorta" class="col-sm-2 control-label">Descripción Corta:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="tbDescripcionCorta" name="tbDescripcionCorta" placeholder="Descripción Corta"  maxlength="30">
          <span class="help-block">La Descripcion Corta se mostrará en el ticket (max. 30 caracteres).</span>
        </div>
      </div>
      <div class="form-group">
        <label for="tbPrecio" class="col-sm-2 control-label">Precio:</label>
        <div class="col-sm-10">
          <div class="input-group">
            <div class="input-group-addon">S/</div>
            <input type="text" class="form-control" id="tbPrecio" name="tbPrecio" placeholder="Precio">
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </div>
    </form>
  </div>
@endsection