
@extends('layouts.admin')
@section('content')
<div class="container"><br/>
  <div class="card-panel">
    <h5 class="blue-text">Partida {{$partida->partida}}</h5>
    <div class="divider"></div><br/>
    <form action="{{url('decrees')}}" method="POST" autocomplete="off" class="col s12">
      {{csrf_field()}}
      @var('decretoID',$partida->decree_id)<br/>
      <div class="row">
        <div class="col s5 push-s1 input-field">
          <input type="hidden" name="decree_id" value="{{$decretoID}}"/>
          <input type="hidden" name="traslado" value="0"/>
          <input type="text" id="partidaMenos" name="partida" required="required" class="validate"/>
          <label for="partidaMenos">Partida</label>
        </div>
        <div class="col s4 push-s1 input-field">
          <input type="number" id="montoMenos" name="monto" required="required" class="validate"/>
          <label for="montoMenos">Monto</label>
        </div>
        <div class="col s2 push-s1">@if($partida->traslado = true)
          <button type="submit" class="btn green"> <i aria-hidden="true" class="fa fa-plus"></i></button>@else
          <button type="submit" class="btn red"> <i aria-hidden="true" class="fa fa-minus"></i>@endif</button>
        </div>
      </div>
    </form>
  </div>
</div>@endsection