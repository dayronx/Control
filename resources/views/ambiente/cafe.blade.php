@extends('adminlte::page')

@section('title', 'Lab de Cafe')

@section('content_header')



  
<div class="col-md-12">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Equipos</h4>
          <p class="card-category"></p>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class="text-primary">
                <th>Nombre</th>
                <th>Marca</th>
                <th>Cantidad</th>
                <th>Tipo</th>
                <th>Descripcion</th>
                <th>Ficha tecnica</th>
                <th>Acciones</th>
              </thead>
              <tbody>
                @foreach ($equipos as $equipo )
                   <tr>
                      <td>{{$equipo->nombre}}</td>
                      <td>{{$equipo->marca}}</td>
                      <td>{{$equipo->cantidad}}</td>
                      <td>{{$equipo->tipo}}</td>
                      <td>{{$equipo->descripcion}}</td>
                      <td>{{$equipo->PDF}}</td>
                      
                   </tr>
                @endforeach
              
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer mr-auto">
          
        </div>
      </div>
    </div>
  </div>
</div>
<hr>
@endsection