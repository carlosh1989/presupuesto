@extends('layouts.app')

@section('content')

<div class="container-fluid">


<div class="panel panel-default">
  <div class="panel-heading animated shake">Todos los Posts</div>
  <div class="panel-body">
		<h4>{{$post->titulo}}</h4>
		<p>
			{{$post->contenido}}
		</p>
		<a class="btn btn-info" href="{{url('posts/'.$post->id.'/form')}}">Actualizar</a>
		<a class="btn btn-danger" href="{{url('posts/'.$post->id.'/destroy')}}">Eliminar</a>
		<hr>
  </div>
</div>



</div>

@endsection