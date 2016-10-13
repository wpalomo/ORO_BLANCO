@extends('layouts.dashboard')

@section('title')
  Reportes
@endsection

@section('css')
  <link rel="stylesheet" href="{{ asset('css/bootstrap-material-datetimepicker.css') }}">
@endsection

@section('content')
  <div class="col-sm-8">
    <h2 class="font-main-color">Reporte de Ventas</h2>
    <form class="form-horizontal" method="POST" action="{{ url('/admin/productos') }}">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <label for="fechaInicial" class="col-sm-2 control-label">Fecha Inicial:</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" id="fechaInicial" name="fechaInicial" placeholder="Fecha Inicial">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn main-color btn-ob waves-effect waves-light">Guardar</button>
        </div>
      </div>
    </form>
  </div>
@endsection

@section('scripts')
  <script src="{{ asset('js/moment-with-locales.js') }}"></script>
  <script src="{{ asset('js/bootstrap-material-datetimepicker.js') }}"></script>
  <script>
    $('input[type=date]').bootstrapMaterialDatePicker({
      weekStart : 1,
      time : false,
      lang : 'es',
      cancelText : 'cerrar',
      switchOnClick : true
    });
  </script>
@endsection