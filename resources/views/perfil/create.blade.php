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
                   
                  <form action="{{route('perfil.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label class="form-label">Nombres</label>
                      <input type="text" class="form-control" id="email" placeholder="Nombres" name="name">
                    </div> 
                   
                    <div class="mb-3">
                       <label class="form-label">Correo</label>
                       <input type="text" class="form-control" id="email" placeholder="Correo electronico" name="email">
                    </div> 
                    <div class="mb-3">
                      <label class="form-label">Contraseña</label>
                      <input type="password" class="form-control" id="email" placeholder="Correo electronico" name="password">
                   </div> 
                    <div class="d-flex justify-content-end col-12">
                      <button type="submit"  class="btn btn-outline-dark"  >GUARDAR FORMULARIO</button>
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