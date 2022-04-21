@extends('adminlte::page')

@section('title', 'Control')

@section('plugins.Sweetalert2 ', true)



@section('content')

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="imagenes/img0.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="imagenes/img1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="imagenes/img2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="imagenes/img3.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="imagenes/img4.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="imagenes/img5.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="imagenes/img6.jpg" class="d-block w-100" alt="...">
      </div>
  
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden"></span>
    </button>
  </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="css/dashboard.css">
@stop

@section('js')
    
    <script>
      Swal.fire(
        'formulario guardado!',
        'de click en el siguiente boton',
        'success'
      )
    </script>
@stop