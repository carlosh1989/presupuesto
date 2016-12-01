
@extends('layouts.admin')
@section('content')
<div class="container">
  <div class="card-panel">@var('idDecreto',$decreto->id)
    <h4 class="blue-text">{{$decreto->titulo}}</h4>
    <div class="pull-right"> 
      <div class="row">
        <div class="col s6 l6"><a href="{{url('decretos/'.$idDecreto.'/edit')}}" class="btn waves-effect waves-light blue"><i aria-hidden="true" class="fa fa-pencil"></i></a></div>
        <div class="col s6 l6">
          <form action="{{url('decretos/'.$idDecreto)}}" method="POST">{{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE"/>
            <button href="{{url('decretos/'.$idDecreto)}}" type="submit" class="btn waves-effect waves-light red fa fa-times"></button>
          </form>
        </div>
      </div>
    </div>
    <div class="divider"></div>
    <p>
      {{$decreto->descripcion}}
      
    </p>
  </div>
</div>@endsection