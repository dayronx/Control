
@extends('adminlte::page')

@section('title', 'Agregar Equipo')

@section('content_header')

<h4>Registro Equipo  Nuevo </h4>
@stop


@section('content')
 
 <form action="{{route('equipos.store')}}" method="POST" enctype="multipart/form-data">
  
   @csrf
     <div class="row">
         <div class="col-12 ">
           <div>
            <label  >
              Nombre:
              <br/>
              <input  class="form-control" type="text" name="nombre">
            </label>
           </div>
         
         </div>
         <div  class="col-lg-4 col-12">
           <div>
            <label >
              Marca:
              <br/>
              <input type="text" name="marca" class="form-control">
            </label>
           </div>
          </div>
          <div  class="col-lg-4 col-12">
            <div>
              <label >
                Cantidad:
                <br/>
                <input type="number" name="cantidad" class="form-control">
              </label>
            </div>
          </div>
          <div class="col-lg-4 col-12">
             <div>
              <label >
                Tipo:
                <select class="form-select" aria-label="Default select example" name="tipo">
                  <option value="calor">Maquina de Calor</option>
                  <option value="frio">Maquina de Frio</option>
              </select>
              </label>
             </div>
          </div>
          <div class="col-lg-4 col-12">
            <div>
              <label >
                Ubicacion:
                <br/>
                <input type="text" name="ubicacion"  class="form-control">
              </label>
            </div>
         </div>
         <div class="col-lg-8 col-12">
          <div>
            <label >
              Descripcion
              <br/>
              <textarea name="descripcion" rows="5" ></textarea>
            </label>
          </div>
       </div>
       <div class="col-lg-6 col-12">
        <div>
          <label >
            Ficha Tecnica:
            <br/>
            <p>
              PDF:
             <input type="file" name="PDF">
           </p>
           </label>
        </div>
     </div>
     <div class="col-lg-6 col-12">
      <div>
        <label >
          Foto:
          <br/>
          <p>
           <input type="file" name="foto">
         </p>
         </label>
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
  
  
  

@stop
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="css/dashboard.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@stop


