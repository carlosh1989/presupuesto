
@extends('layouts.admin')
@section('content')
<div class="container"><br/>
  <div class="card-panel">
    <h5 class="blue-text">Nuevo Decreto (Traspaso de Partida)</h5>
    <div class="divider"></div><br/>
    <form action="{{url('decrees')}}" method="POST" autocomplete="off" class="col s12">{{csrf_field()}}
      <input type="hidden" name="tipoMovimiento" value="Traspaso de Partida"/>
      <div class="row">
        <div class="input-field col l6">
          <input id="numeroDecreto" type="text" name="numeroDecreto" class="validate"/>
          <label for="numeroDecreto">Numero de Decreto</label>
        </div>
        <div class="input-field col l6">
          <input id="fecha" type="text" name="fecha" class="datepicker"/>
          <label for="fecha">Fecha</label>
        </div>
      </div>
      <div class="row">
        <div class="col s12">
          <div class="row">
            <div class="input-field col s6">
              <input type="text" id="Dependencia" name="dependencia" class="autocomplete validate"/>
              <label for="Dependencia">Dependencia</label>
            </div>
            <div class="input-field col s6 validate">
              <input type="text" id="Partida" name="partida" class="autocomplete validate"/>
              <label for="Partida">Partida</label>
            </div>
          </div>
        </div>
        <div class="input-field col s12">
          <textarea id="textareaDescripcion" name="descripcion" cols="30" rows="10" length="120" class="materialize-textarea validate"></textarea>
          <label for="textareaDescripcion">Descripción</label>
        </div>
        <div class="input-field col l6">
          <input id="monto" name="montoTotal" type="number" class="validate"/>
          <label for="monto">Monto</label>
        </div>
      </div>
      <div class="row">
        <div class="col s12">
          <button type="submit" class="blue btn waves-effect waves-light pull-right">Ingresar <i class="fa fa-save fa-2x"></i></button>
        </div>
      </div>
    </form>
  </div>
</div>
<script>
  (function($){
  $(function(){
  $(function() {
  
  $('#Dependencia').autocomplete({
  data: {
  @foreach($dependencias as $d)
  "{{$d->descripcion}}:{{$d->id}}:{{$d->codigo}}": null,
  @endforeach
  }
  });
  
  $('#Partida').autocomplete({
  data: {
  @foreach($partidas as $d)
  " {{$d->descripcion}}:{{$d->id}}:{{$d->codigo}}": null,
  @endforeach
  }
  });
  
  });
  }); 
  })(jQuery); 
</script>@endsection