
@extends('layouts.admin')
@section('content')
<div class="container">
  <div class="card-panel">
    <h4 class="blue-text">Actualizar Decreto</h4>
    <div class="divider"></div>@var('id',$decreto->id)
    <form action="{{url('decretos/'.$id)}}" method="POST" accept-charset="UTF-8">{{csrf_field()}}
      <input type="hidden" name="_method" value="PUT"/>
      <div class="row">
        <div class="col s12">
          <div class="row">
            <div class="input-field col s12">@var('titulo',$decreto->titulo)
              <input type="text" id="titulo1" name="titulo" value="{{ old( 'titulo', $titulo) }}" class="validate"/>
              <label for="titulo1">Titulo</label>
            </div>
          </div>@if ($errors->has('titulo'))
          <div class="card-panel red white-text animated bounceIn">{{ $errors->first('titulo') }}<i aria-hidden="true" class="fa fa-exclamation pull-right fa-2x"></i></div>@endif
        </div>
        <div class="col s12">
          <div class="row">
            <div class="input-field col s12">@var('descripcion',$decreto->descripcion)
              <textarea id="textarea1" name="descripcion" class="materialize-textarea validate">{{ old( 'descripcion', $descripcion) }}</textarea>
              <label for="textarea1">Descripción</label>
            </div>
          </div>@if ($errors->has('descripcion'))
          <div class="card-panel red white-text animated bounceIn">{{ $errors->first('descripcion') }}<i aria-hidden="true" class="fa fa-exclamation pull-right fa-2x"></i></div>@endif
        </div>
        <div class="pull-right"> 
          <div class="col s12">
            <div class="row">
              <button type="submit" class="btn btn waves-effect waves-light">Actualizar <i class="material-icons right">send</i></button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>@endsection