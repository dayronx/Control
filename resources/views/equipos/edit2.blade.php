
@extends('adminlte::page')

@section('title', 'Agregar Equipo')
@section('content_header')
   
@stop

@section('content')

<h4>Registro de Mantenimiento </h4>
 
 <form action="{{route('equipos.update', $equipos->id)}}" method="POST" enctype="multipart/form-data">
  
   @csrf
    
   @method('PUT')

   <div class="row">
    <div class="col-lg-4 col-12 py-4">
      
      <img src="{{asset($equipos->foto)}}" height="200" width="200" style="border-radius: 30px">
      <div class="col-4 pt-5 ml-5">
        <label > Ficha tecnica:</label>
        <a target="_blank" href="{{asset($equipos->PDF)}}"><img height="100" width="80" src="{{asset('img/pdf.png')}}" alt=""></a>
       </div>
     </div>
  
     <div class="col-lg-8 col-12">
       <div class="row">
        <div class="col-12 ">
          <div>
           <label  >
             Nombre:
             <br/>
             <input  class="form-control" type="text" name="nombre" value="{{old('nombre',$equipos->nombre)}}" disabled readonly>
           </label>
          </div>
        
        </div>
        <div  class="col-lg-4 col-12">
          <div>
           <label >
             Marca:
             <br/>
             <input type="text" name="marca" class="form-control" value="{{old('marca',$equipos->marca)}}" disabled readonly>
           </label>
          </div>
         </div>
         <div  class="col-lg-4 col-12">
           <div>
             <label >
               Cantidad:
               <br/>
               <input type="number" name="cantidad" class="form-control" value="{{old('cantidad',$equipos->cantidad)}}" disabled readonly>
             </label>
           </div>
         </div>
         <div class="col-lg-4 col-12">
            <div>
             <label >
               Tipo:
               <br/>
               <input type="text" name="tipo" class="form-control" value="{{old('tipo',$equipos->tipo)}}" disabled readonly>
             </label>
            </div>
         </div>
         <div class="col-lg-12 md-5 col-12">
           <div>
             <label >
               Ubicacion:
               <br/>
               <input type="text" name="ubicacion"  class="form-control" value="{{old('ubicacion',$equipos->ubicacion)}}" disabled readonly>
             </label>
           </div>
        </div>
        <h4 class="col-lg-12 md-5 col-12"> Registro de Mantenimiento </h4>
      <div class="col-lg-6 col-12">
       <div>
        <label >
          tipo de mantenimiento:
          <select class="form-select" aria-label="Default select example" name="Mantenimiento">
              <option value="correctivo">correctivo</option>
              <option value="preventivo">preventivo</option>
          </select>
        </label>
       </div>
    </div>
    <div class="col-lg-6 col-12">
      <div>
       <label >
         Estado de la maquina:
         <select class="form-select" aria-label="Default select example" name="estado">
             <option value="bueno">bueno</option>
             <option value="malo">malo</option>
         </select>
       </label>
      </div>
   </div>
    <div class="col-lg-6 col-12">
       <div>
         cambio de piezas :
         <div class="form-check form-check-inline">
          <label class="form-check-label" for="inlineRadio1">si</label>
          <input class="form-check-input" type="radio" name="cambioDePiezas" id="inlineRadio1" value="Si">
          
        </div>
        <div class="form-check form-check-inline">
          <label class="form-check-label" for="inlineRadio2">no</label>
          <input class="form-check-input" type="radio" name="cambioDePiezas" id="inlineRadio2" value="No">
         
        </div>
        
       </div>

    </div>
    <div  class="col-lg-4 col-12">
      <div>
        <label >
          Prioridad:
          <br/>
          <input type="number" name="prioridad" class="form-control"  >
        </label>
      </div>
    </div>
    <div class="col-lg-6 col-12">
     <div>
       <label >
         Foto de la pieza cambiada:
         <br/>
         <p>
          <input type="file" name="foto2">
        </p>
        </label>
     </div>
    </div>

       </div>
      
  </div>
     </div>
    </div>
    
<br/>
<br/>

<div class="d-flex justify-content-end col-12">
 <button type="submit"  class= "btn btn-secondary" >GUARDAR FORMULARIO</button>
</div>
<br/>

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


