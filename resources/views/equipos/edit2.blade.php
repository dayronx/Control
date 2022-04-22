
@extends('adminlte::page')

@section('title', 'vista')
@section('content_header')


<a href="{{route('equipos.reporte')}}" ><button   type="button" class="btn btn-outline-dark" style="float: right;">Crear nuevo Reporte</button></a>

@stop

@section('content')


 
 <form action="{{route('equipos.update', $equipos->id)}}" method="POST" enctype="multipart/form-data">
  
   @csrf
    
   @method('PUT')

  
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
  <div class="container mt-4">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h4>Registro de Mantenimiento </h4>
            <hr>
            <form action="{{route('equipos.update', $equipos->id)}}" method="POST" enctype="multipart/form-data">
              

              @csrf
    
              @method('PUT')


                <div class="mb-3">
                    <label  class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control" id="email" value="{{old('nombre',$equipos->nombre)}}" disabled readonly>
                   
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label >Marca</label>
                        <input type="text" name="marca" class="form-control" id="direccion " value="{{old('marca',$equipos->marca)}}" disabled readonly>
                        
                    </div>
                    <div class="col-md-4">
                        <label for="telefono" class="form-label">Cantidad</label>
                        <input type="number" name="cantidad" class="form-control" id="telefono"  value="{{old('cantidad',$equipos->cantidad)}}" disabled readonly>
                       
                    </div>
                    <div class="col-md-4">
                        <label for="telefono" class="form-label">Prioridad</label>
                        <input type="number" name="prioridad" class="form-control" id="telefono"  value="{{old('prioridad',$equipos->prioridad)}}" disabled readonly>
                       
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="direccion" class="form-label">Tipo</label>
                
                        <input type="text" name="tipo" id="direccion" class="form-control" value="{{old('tipo',$equipos->tipo)}}" disabled readonly>
                    </div>
                    <div class="col-md-4">
                        <label for="telefono" class="form-label">Ubicacion</label>
                      
                        <input type="text" name="ubicacion" id="telefono" class="form-control" value="{{old('ubicacion',$equipos->ubicacion)}}" disabled readonly>
                    </div>
                    <div class="col-md-4">
                        <label for="telefono" class="form-label">Estado actual de la Maquina</label>
                      
                        <input type="text" name="estado" id="telefono" class="form-control" value="{{old('estado',$equipos->estado)}}" disabled readonly>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Descripcion de la Maquina:</label>
                    <input type="text" name="estado" id="telefono" class="form-control" value="{{old('descripcion',$equipos->descripcion)}}" disabled readonly>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label > Foto de a Maquina:</label>
                      <div class="card-body" style="border-color: blue">
                        
                        <br/>
                        <img src="{{asset($equipos->foto)}}" height="200" width="200" style="border-radius: 30px">
                      </div> 
                    </div>
                    <div class="col-md-6">
                        <label > Ficha tecnica:</label>
                        <br/>
                        <br/>
                        <br/>
                        <a target="_blank" href="{{asset($equipos->PDF)}}"><img height="100" width="80" src="{{asset('img/pdf.png')}}" alt=""></a>
                    </div>
                </div>
             

            </form>

        </div>
    </div>
</div>




                   
                </form>
            </div>
        </div>
    </div>

</body>

</html>

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


