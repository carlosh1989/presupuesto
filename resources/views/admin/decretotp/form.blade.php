
@extends('layouts.admin')
@section('content')
<div class="container">
  <div class="card-panel">
    <h4 class="blue-text">Ingresar Decreto</h4>
    <div class="divider"></div>
    <form action="{{url('decretos')}}" method="post">{{csrf_field()}}
      <div class="row">
        <div class="col s12">
          <div class="row">
            <div class="input-field col s12">
              <input type="text" id="titulo1" name="titulo" value="{{old('titulo')}}" class="validate"/>
              <label for="titulo1">Titulo</label>
            </div>
          </div>@if ($errors->has('titulo'))
          <div class="card-panel red white-text animated bounceIn">{{ $errors->first('titulo') }}<i aria-hidden="true" class="fa fa-exclamation pull-right fa-2x"></i></div>@endif
        </div>
        <div class="col s12">
          <div class="row">
            <div class="input-field col s12">
              <textarea id="textarea1" name="descripcion" class="materialize-textarea validate">{{old('descripcion')}}</textarea>
              <label for="textarea1">Descripción</label>
            </div>
          </div>@if ($errors->has('descripcion'))
          <div class="card-panel red white-text animated bounceIn">{{ $errors->first('descripcion') }}<i aria-hidden="true" class="fa fa-exclamation pull-right fa-2x"></i></div>@endif
        </div>
        <div class="pull-right"> 
          <div class="col s12">
            <div class="row">
              <button type="submit" class="btn btn waves-effect waves-light">Ingresar <i class="material-icons right">send</i></button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>@endsection 