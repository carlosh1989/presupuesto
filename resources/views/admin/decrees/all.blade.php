
@extends('layouts.admin')
@section('content')
<div class="container"><br/>
  <div class="card-panel">
    <h5 class="blue-text">Decretos</h5>
    <div class="divider"></div>
    <table>
      <thead>
        <tr>
          <th>Descripción</th>
          <th>n° Decreto</th>
          <th>Tipo Movimiento</th>
        </tr>
      </thead>
      <tbody>@forelse($decretos as $decreto)
        <tr>
          <td>{{$decreto->descripcion}}</td>
          <td>{{$decreto->numero}}</td>
          <td>{{$decreto->tipoMovimiento}}</td>
        </tr>@empty
        <label class="grey-text">No hay Decretos.</label>@endforelse
      </tbody>
    </table>
  </div>
</div>@endsection