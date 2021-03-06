@extends('layouts.dashboard')

@section('title')
  Anular Venta
@endsection

@section('content')
  <div class="col-sm-8">
    <h2 class="font-main-color">Anular Venta</h2>
    <form class="form-horizontal" method="GET" action="{{ url('/admin/mostrar_venta') }}">
      <div class="form-group">
        <label for="tbTicket" class="col-sm-2 control-label">Numero de Ticket:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="tbTicket" name="tbTicket" placeholder="Ingrese el numero del ticket ">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn main-color btn-ob waves-effect waves-light">Buscar Venta</button>
        </div>
      </div>
    </form>
  </div>
@endsection


