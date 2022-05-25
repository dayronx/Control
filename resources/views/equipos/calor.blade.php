@extends('adminlte::page')

@section('title', 'Equipos de Calor')

@section('content_header')
   
@stop

@section('content')

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
                <thead class="text-dark">
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Marca</th>
                  <th>Cantidad</th>
                  <th>Tipo</th>
                  <th>estado</th>
                  <th>ubicacion</th>
                  <th>Acciones</th>
                </thead>
                <tbody>
                  @foreach ($equipos as $equipo )
                  <tr style="text-align: center">
                     <td>{{$equipo->id}}</td>
                     <td>{{$equipo->nombre}}</td>
                     <td>{{$equipo->marca}}</td>
                     <td>{{$equipo->cantidad}}</td>
                     <td>{{$equipo->tipo}}</td>
                     <td>{{$equipo->estado}}</td>
                     <td>{{$equipo->ubicacion}}</td>
                     
                     <td class="td-actions text-left">
                       
                       <div class="row mb-3">

                            <a href="{{route('equipos.edit', $equipo->id)}}" class="btn btn-outline-dark"><i class="material-icons">edit</i></a>
                            @can('admin')
                            <form action="{{route('equipos.destroy', $equipo->id)}} " method="POST" class="form-eliminar">

                              @csrf
                              @method('DELETE')
                              <button class="btn btn-outline-dark" type="submit" rel="tooltip">
                                <i class="material-icons">delete</i>
                             </button>
                            </form>
                            @endcan
                           <a href="{{route('equipos.edit2', $equipo->id)}}" class="btn btn-outline-dark"><i class="material-icons">visibility</i></a>
                         
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
<hr>

@endsection
@section('js')

@if (session('eliminar')=='ok')
        <script>
            Swal.fire(
                '¡Eliminado!',
                'La informacion se elimino correctamente.',
                'success'
            ) 
        </script>
    @endif

    @if (session('actualizar')=='ok')
        <script>
            Swal.fire(
                '¡Actualizado!',
                'La informacion se actualizo correctamente.',
                'success'
            ) 
        </script>
    @endif

    @if (session('crear')=='ok')
        <script>
            Swal.fire(
                '¡Agregado!',
                'La informacion se creo correctamente.',
                'success'
            ) 
        </script>
    @endif

    <script>
        $('.form-eliminar').submit(function(e){
            e.preventDefault();
            const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
            })
            swalWithBootstrapButtons.fire({
                title: '¿Estas seguro?',
                text: "¡Este equipo se eliminara definitivamente!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: '¡Si, eliminar!',
                cancelButtonText: 'Cancelar',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {

                    this.submit();

                }else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                    'Cancelado',
                    '¡El equipo no se elimino!',
                    'error'
                    )
                }
            })
        })
    </script>
@stop