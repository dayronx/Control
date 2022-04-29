
@extends('adminlte::page')

@section('title', 'Agregar Equipo')

@section('content_header')
   
@stop

@section('content')



@csrf
 
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
                 <h3>Editar Equipo</h3>
                 <hr>
                 <form action="{{route('equipos.update', $equipos->id)}}" method="POST">
                     @csrf
                     @method('PUT')
 
                     <div class="mb-3">
                         
                         <input type="text" class="form-control" id="email" placeholder="Nombre de la Maquina" name="nombre" value="{{old('nombre',$equipos->nombre)}}">
                     </div> 
                     <div class="row mb-3">
                         <div class="col-md-4">
                             
                             <input type="text" class="form-control" id="nombre" placeholder="Marca" name="marca" value="{{old('marca',$equipos->marca)}}">
 
                         </div>
                         <div class="col-md-4">
                           
                             <input type="number" placeholder="Cantidad" class="form-control" name="cantidad"  value="{{old('cantidad',$equipos->cantidad)}}" id="apellido">
 
                         </div>
                         <div class="col-md-4">
                         
                             <input type="number" placeholder="Prioridad" class="form-control" name="prioridad" value="{{old('prioridad',$equipos->prioridad)}}" id="apellido">
 
                         </div>
 
                     </div>  
                     <div class="row mb-3">
                         <div class="col-md-4">
                           
                             <label class="form-label">Tipo de Maquina:</label>
                             <select class="form-select" aria-label="Default select example" value="{{old('tipo',$equipos->tipo)}}"  name="tipo">
                                 <option value="calor">Maquina de Calor</option>
                                 <option value="frio">Maquina de Frio</option>
                             </select>
                         </div>
                         <div class="col-md-6">
                             <label for="email" class="form-label">Ubicacion: </label>
                             <select class="form-select" aria-label="Default select example"  name="ubicacion" value="{{old('ubicacion',$equipos->ubicacion)}}">
                                 <option value="Ambiente de Cocina">Ambiente de Cocina</option>
                                 <option value="Biotecnologia Vegetal">Biotecnologia Vegetal</option>
                                 <option value="Carnicos">Carnicos</option>
                                 <option value="Laboratorio de Cafe">Laboratorio de Cafe</option>
                                 <option value="Laboratorio de Quimica">        Laboratorio de Quimica</option>
                                 <option value="Laboratorio de Microorganismos">Laboratorio de Microorganismos</option>
                                 <option value="Restaurante de los Aprendices">Restaurante de los Aprendices</option>
                                 <option value="Taller Fruver">Taller Fruver</option>
                                 <option value="Taller Lacteos">Taller Lacteos</option>
                                 <option value="Taller de Panificacion">Taller de Panificacion</option>
                                 <option value="Taller de Produccion">Taller de Produccion </option>
                             </select>
                          </div>
                          <div class="col-md-2">
 
                             <label class="form-label">Estado:</label>
                             <select class="form-select" aria-label="Default select example" value="{{old('estado',$equipos->estado)}}"  name="estado">
                                 <option value="Bueno">Bueno</option>
                                 <option value="Malo">Malo</option>
                                 <option value="En Reparacion">En Reparacion </option>
                             </select>
                             
                         </div>
                     </div>
                     <div class="mb-3">
                         <label for="email" class="form-label">Descripcion de la Maquina:</label>
                         <textarea class="form-control" name="descripcion"  value="{{old('descripcion',$equipos->descripcion)}}" id="exampleFormControlTextarea1" rows="3"></textarea>
                     </div>
                     <div class="row mb-3">
                         <div class="col-md-6">
                             
                             <label >Anexar Ficha Tecnica:</label>
                           
                             <p>
                                   PDF:
                                  <input type="file" name="PDF">
                             </p>
                                
 
                         </div>
                         <div class="col-md-6">
                           
                             <label >Subir Foto de la Maquina:</label>
                                 
                             <p>
                                  FOTO:
                                  <input type="file" name="foto">
                             </p>     
 
                         </div>
                        
                     </div>
                     <div class="d-flex justify-content-end col-12">
                       <button type="submit"  class= "btn btn-secondary" >GUARDAR FORMULARIO</button>
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

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@stop


