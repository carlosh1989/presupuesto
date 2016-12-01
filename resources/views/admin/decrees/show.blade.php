
@extends('layouts.admin')
@section('content')
<div class="container"><br/>
  <div class="card-panel">
    <h5 class="blue-text"><a href="#modal1" class="waves-effect waves-blue btn-flat blue-text">Decreto N° {{$decreto->numero}}</a></h5>
    <div>
      <div class="divider"></div>
      <div class="row">
        <div class="col s12">
          <ul class="tabs">
            <li class="tab col s3"><a href="#test1" class="green-text">Aumentos </a></li>
            <li class="tab col s3"><a href="#test2" class="red-text">Disminuciones</a></li>
          </ul>
          <div class="divider"></div>
        </div>
        <div id="test1" class="col s12"> 
          <form action="{{url('details')}}" method="POST">
            {{csrf_field()}}
            @var('decretoID',$decreto->id)<br/>
            <div class="row">
              <div class="col s5 push-s1 input-field">
                <input type="hidden" name="decree_id" value="{{$decretoID}}"/>
                <input type="hidden" name="traslado" value="1"/>
                <input type="text" id="partidaMas" name="partida" required="required" class="validate"/>
                <label for="partidaMas">Partida</label>
              </div>
              <div class="col s4 push-s1 input-field">
                <input type="text" id="montoMas" name="monto" required="required" class="validate"/>
                <label for="montoMas">Monto</label>
              </div>
              <div class="col s2 push-s1">
                <button type="submit" class="btn green"> <i aria-hidden="true" class="fa fa-plus"></i></button>
              </div>
            </div>
          </form>
        </div>
        <div id="test2" class="col s12">
          <form action="{{url('details')}}" method="POST">{{csrf_field()}}<br/>
            <div class="row">
              <div class="col s5 push-s1 input-field">
                <input type="hidden" name="decree_id" value="{{$decretoID}}"/>
                <input type="hidden" name="traslado" value="0"/>
                <input type="text" id="partidaMenos" name="partida" required="required" class="validate"/>
                <label for="partidaMenos">Partida</label>
              </div>
              <div class="col s4 push-s1 input-field">
                <input type="text" id="montoMenos" name="monto" required="required" class="validate"/>
                <label for="montoMenos">Monto</label>
              </div>
              <div class="col s2 push-s1">
                <button type="submit" class="btn red"> <i aria-hidden="true" class="fa fa-minus"></i></button>
              </div>
            </div>
          </form>
        </div>
        <div class="divider"></div>
      </div>
      <div class="row">
        <div class="col s6"></div>
        <div class="col s3">
          <div><a class="blue-text">Monto sumatorio:   <a class="grey-text">{{$decreto->details->sum('monto')}}</a></a></div>
        </div>
        <div class="col s3">
          <div><a class="blue-text">
              Monto Total: 
              @var('montoTotal',(double)$decreto->montoTotal)  <a class="grey-text">{{$montoTotal}}</a></a></div>
        </div>
      </div>
      <div class="divider"></div>
      <div class="row">
        <div class="col s12"></div>
      </div>@if($decreto->details)
      <table class="centered striped">
        <thead>
          <tr class="grey-text">
            <th>Partida</th>
            <th>Monto</th>
            <th>Traslado</th>
          </tr>
        </thead>
        <tbody>@forelse($decreto->details as $partida)
          <tr>
            <td>{{$partida->partida}}</td>@var('monto',(double)$partida->monto)
            <td>{{$monto}}</td>@if($partida->traslado == true)
            <td>
              <label>recibe</label>
            </td>@else
            <td>
              <label>otorga</label>
            </td>@endif		
          </tr>@empty
          @endforelse
        </tbody>
      </table>@else
      <div class="grey-text">No hay partidas aun para este decreto.</div>@endif
    </div>
  </div>
  <div id="modal1" class="modal botton-sheet">
    <div class="modal-content">
      <p>{{$decreto->descripcion}}</p>
      <div class="divider"></div><br/>
      <div class="row">
        <div class="col s6">
          <div><a class="blue-text">N°   <a class="grey-text">{{$decreto->numero}}</a></a></div>
        </div>
        <div class="col s6">
          <div><a class="blue-text">Tipo movimiento  <a class="grey-text">{{$decreto->tipoMovimiento}}</a></a></div>
        </div>
      </div>
      <div class="row">
        <div class="col s6">
          <div><a class="blue-text">Codigo Presupuestario  <a class="grey-text">{{$decreto->codigoPresupuestario}}</a></a></div>
        </div>
        <div class="col s6">
          <div><a class="blue-text">Fecha  <a class="grey-text">{{$decreto->fecha}}</a></a></div>
        </div>
      </div>
      <div class="row">
        <div class="col s6">
          <div><a class="blue-text">Monto Total <a class="grey-text">{{$decreto->montoTotal}}</a></a></div>
        </div>
        <div class="col s6">
          <div><a class="blue-text">
              Estado  
              @if($decreto->estado == true)<a class="grey-text">Activo</a>@else<a class="grey-text">Anulado</a>@endif</a></div>
        </div>
      </div>
    </div>
    <div class="modal-footer"><a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a></div>
  </div>
</div>
<script>
  $(document).ready(function(){
  $('#partidaMas').mask('00-00-00-00-00,0.00-00-00-00');
  $('#montoMas').mask('#.##0,00', {reverse: true});
  $('#partidaMenos').mask('00-00-00-00-00,0.00-00-00-00');
  $('#montoMenos').mask('#.##0,00', {reverse: true});
  }); 
</script>@endsection