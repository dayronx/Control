@extends('adminlte::page')

@section('title', 'Control')

@section('content_header')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>
        <script src="app2.js"></script>
    </head>
    <body>
      @csrf
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                   
                  <form action="{{route('perfil.edit', $user->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                      <label class="form-label">Nombres</label>
                      <input type="text" class="form-control" id="email" placeholder="Nombres" name="name"
                       value="{{$user->name}}">
                      
                    </div> 
                   
                    <div class="mb-3">
                       <label class="form-label">Correo</label>
                       <input type="text" class="form-control" id="email" placeholder="Correo electronico" name="email"
                       value="{{$user->email}}">
                    </div> 
                    <div class="mb-3">
                      <label class="form-label">Contraseña</label>
                      <input type="password" class="form-control" id="email" placeholder="Correo electronico" name="password">
                   </div> 
                   <div class="row">
                    <label for="roles" class="col-sm-2 col-form-label">Roles</label>
                    <div class="col-sm-7">
                        <div class="form-group">
                            <div class="tab-content">
                                <div class="tab-pane active">
                                    <table class="table">
                                        <tbody>
                                            @foreach ($roles as $id => $role)
                                                    <td>
                                                        <input class="form-check-input" type="checkbox" name="roles[]"
                                                            value="{{$id}}" {{$user->roles->contains($id) ? 'checked' : ''}}>
                                                        <span class="form-check-sign">
                                                            <span class="check"></span>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        {{$role}}
                                                    </td>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="d-flex justify-content-end col-12">
                      <button type="submit"  class="btn btn-outline-dark"  >GUARDAR CAMBIOS</button>
                    </div>
                  </form>
                 
                </div> 
            </div>
        </div>
    
    </body>
    


</html>

@endsection
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="css/dashboard.css">
@stop