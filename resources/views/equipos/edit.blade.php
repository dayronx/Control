
@extends('adminlte::page')

@section('title', 'Agregar Equipo')

@section('content_header')
   
@stop

@section('content')

<h4>Registro Equipo  Nuevo </h4>
 
 <form action="{{route('equipos.update', $equipos->id)}}" method="POST">
  
   @csrf
    
   @method('PUT')

   <label >
     Nombre:
     <br/>
     <input type="text" name="nombre" value="{{old('nombre',$equipos->nombre)}}">
   </label>
   <br/>
   <label >
    Marca:
    <br/>
    <input type="text" name="marca" value="{{old('marca',$equipos->marca)}}">
  </label>
  <br/>
  <label >
    Cantidad:
    <br/>
    <input type="number" name="cantidad" value="{{old('cantidad',$equipos->cantidad)}}">
  </label>
  <br/>
  <label >
    Tipo:
    <br/>
    <input type="text" name="tipo" value="{{old('tipo',$equipos->tipo)}}">
  </label>
  <br/>
  <label >
    Ubicacion:
    <br/>
    <input type="text" name="ubicacion" value="{{old('ubicacion',$equipos->ubicacion)}}">
  </label>
  <br/>
  <label >
    Descripcion
    <br/>
    <textarea name="des" rows="5" value="{{old('descripcion',$equipos->descripcion)}}"></textarea>
  </label>
  <br/>
  <label >
    Ficha Tecnica:
    <br/>
    <p>
      PDF:
     <input type="file" name="pdf">
   </p>
   </label>
   <br/>
  <label >
   Foto:
   <br/>
   <p>
    <input type="file" name="ft">
  </p>
  </label>
  <br/>
  <button type="submit" >GUARDAR FORMULARIO</button>
  
 </form>
  
  
  

@endsection
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="css/dashboard.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@stop


