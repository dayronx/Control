@extends('adminlte::page')

@section('title', 'Control')

@section('content_header')



@section('content')

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"  href="dashboard.css">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>
       
    </head>
<body>
  
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" >
        <img src="imagenes/img0.png"  height="600px" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="imagenes/img1.jpg"  height="600px"  class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="imagenes/img2.jpg" height="600px"  class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="imagenes/img3.jpg" height="600px"  class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="imagenes/img4.jpg" height="600px"  class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="imagenes/img5.jpg" height="600px"  class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="imagenes/img6.jpg" height="600px"  class="d-block w-100" alt="...">
      </div>
  
    </div>

  </div>


</body>
</html>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="css/dashboard.css">
@stop

@section('js')
    
  
@stop