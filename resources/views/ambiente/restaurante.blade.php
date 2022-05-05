@extends('adminlte::page')

@section('title', 'Lab Quimica')

@section('content_header')



@stop

@section('content')
  
       


   <div class="content">
    <div class="container-fluid">
      <div class="row">
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
                        <tr style="text-align: center">
                          <th>Nombre</th>
                          <th>Marca</th>
                          <th>Cantidad</th>
                          <th>Tipo</th>
                          <th>Estado</th>
                          <th>Ubicacion</th>
                          <th>Ficha tecnica</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($equipos as $equipo )
                           <tr style="text-align: center">
                              <td>{{$equipo->nombre}}</td>
                              <td>{{$equipo->marca}}</td>
                              <td>{{$equipo->cantidad}}</td>
                              <td>{{$equipo->tipo}}</td>
                              <td>{{$equipo->estado}}</td>
                              <td>{{$equipo->ubicacion}}</td>
                              <td><img src="{{asset('img/pdf.png')}}" height="40" width="40"></td>
                              <td class="td-actions text-left">
                                
                                <div class="row mb-3">

                                     <a href="{{route('equipos.edit', $equipo->id)}}" class="btn btn-warning"><i class="material-icons">edit</i></a>
                                    <form action="{{route('equipos.destroy', $equipo->id)}} " method="POST" class="form-eliminar">
                                      @csrf
                                      @method('DELETE')
                                      <button  class="btn btn-danger" type="submit" rel="tooltip">
                                        <i class="material-icons">delete</i>
                                     </button>
                                    </form>
                                    <a href="{{route('equipos.edit2', $equipo->id)}}" class="btn btn-success"><i class="material-icons">visibility</i></a>
                                  
                                </div>
                             
                              </td>   
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
      </div>
    </div>
  </div>


 
@endsection