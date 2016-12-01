@extends('layouts/app')

@section('content')

<div class="container-fluid">


<div class="panel panel-default">
  <div class="panel-heading animated shake">Ingresar Post</div>
  <div class="panel-body">
    <form action="{{url('posts/'.$post->id.'/update')}}" method="post">
    {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Titulo</label>
    <input name="titulo" value="{{$post->titulo}}" type="text" class="form-control" id="exampleInputEmail1" placeholder="Titulo" required="required">
<br>
 @if ($errors->has('titulo'))
 <div class="alert alert-danger animated bounceIn">
 <span class="help-block">
    <strong style="color:#444;">{{ $errors->first('titulo') }}</strong>
</span> 
 </div>

@endif
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contenido</label>
   <input name="texto" value="{{$post->contenido}}" class="form-control" id="exampleInputEmail1" placeholder="contenido" required="required">
   <br>
   @if ($errors->has('texto'))
 <div class="alert alert-danger animated bounceIn">
 <span class="help-block">
    <strong style="color:#444;">{{ $errors->first('texto') }}</strong>
</span> 
 </div>
@endif
  </div>
  <button name="contenido" type="submit" class="btn btn-default">Guardar</button>
</form>

  </div>
</div>


</div>

@endsection