@extends('adminlte::page')

@section('title', 'Perfiles')

@section('content_header')


@stop

@section('content')
<br/>
<br/>
<div class="col-md-12">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">

            <div class="row mb-3">
                <div class="col-md-6">
                    <h4 class="card-title">Perfiles del Sistema</h4>
                    <p class="card-category"></p>
                </div>

                <div class="col-md-6">
                    <a href="{{route('perfil.create')}}" ><button   type="button" class="btn btn-outline-dark" style="float: right;">Crear nuevo Perfil</button></a>

                </div>



            </div>
       
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class="text-dark">
                  <th>ID</th>
                  <th>Nombres</th>
                  <th>Rol</th>
                  <th>Correo</th>
                  <th>Acciones</th>
                </thead>
                <tbody>
                  @foreach ($user as $users  )
                  <tr style="text-align: center">
                     <td>{{$users->id}}</td>
                     <td>{{$users->name}}</td>
                     <td>{{$users->name}}</td>
                     <td>{{$users->email}}</td>  
                     <td class="td-actions text-left">
                       <div class="row mb-3">
                        <a href="{{route('perfil.editform', $users->id)}}" class="btn btn-outline-dark" > <i class="material-icons">edit</i></a>
                           
                           <form action="{{route('perfil.delete', $users->id)}}" method="POST" class="form-eliminar">
                             @csrf
                             @method('DELETE')
                             <button  class="btn btn-outline-dark" type="submit" rel="tooltip">
                               <i class="material-icons">delete</i>
                            </button>
                           </form>
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

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="css/dashboard.css">
@stop

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
                text: "¡Este perfil se eliminara definitivamente!",
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
                    '¡El perfil no se elimino!',
                    'error'
                    )
                }
            })
        })
    </script>
@stop
