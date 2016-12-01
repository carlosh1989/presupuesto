
@extends('layouts.admin')
@section('content')
<div class="container">
  <div class="card-panel">
    <h3 class="blue-text">{{$decreto->titulo}}</h3>
    <div class="divider"></div>
    <p>{{$decreto->titulo}}</p><a href="#" class="btn">Actualizar</a><a href="#" class="btn">Borrar</a>
  </div>
</div>@endsection