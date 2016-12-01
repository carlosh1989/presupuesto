@extends('layouts.app')

@section('content')


<div class="container-fluid">


<div class="panel panel-default">
  <div class="panel-heading animated shake">Todos los Posts</div>
  <div class="panel-body">
    @foreach($posts as $po)
		<h4><a href="{{url('posts/'.$po->id.'/show')}}">{{$po->titulo}}</a></h4>
		<hr>
    @endforeach
	
  </div>
{{ $posts->links() }}
</div>



</div>


@endsection