
	@extends('layouts.admin')
@section('content')
<div class="container">
  <div class="card-panel">
    <h3 class="blue-text">Decretos</h3>
    <div class="pull-right"> <a href="{{url('decretos/create')}}" class="btn ble"><i aria-hidden="true" class="fa fa-plus pull-right fa-2x"></i></a></div>
    <table>
      <thead>
        <tr>
          <th data-field="Titulo">Titulo</th>
          <th data-field="Desc">Descripciónsdfsdfsd</th>
        </tr>
      </thead>
      <tbody>@foreach($decretos as $decreto)
        <tr>
          <td>{{$decreto->titulo}}</td>@var('idDecreto',$decreto->id)
          @var('descripcion',$decreto->descripcion)
          <td>{{$descripcion}}</td>
          <td><a href="{{url('decretos/'.$idDecreto)}}" class="btn waves-effect waves-light blue"><i aria-hidden="true" class="fa fa-search-plus"></i></a></td>
        </tr>@endforeach
      </tbody>
    </table>
  </div>
</div>@endsection