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
<<body>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="mb-3"  style="align-content: center">
                    <h3  style="align-content: center">Reporte de Mantenimiento</h3>
                </div>
                
                <hr>
                <form id="form" method="POST" enctype="multipart/form-data">
      
                  @csrf

                    
                    <br/>
                    <div class="mb-3"  style="text-align: center">
                       
                        
                        <h5 style="align-content: center">Informacion del profesional</h5>
                      
                    </div>
                    <br/>
                    <br/> 
                    <br/> 

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="nombre" class="form-label">Nombres</label>
                            <input type="text" class="form-control" id="nombre">
                        </div>
                        <div class="col-md-6">
                            <label for="apellido" class="form-label">Apellidos</label>
                            <input type="text" class="form-control" id="apellido">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Correo electronico</label>
                        <input type="email" class="form-control" id="email">
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="direccion" class="form-label">Entidad  a la que pertenece</label>
                            <input type="text" class="form-control" id="direccion">
                        </div>
                        <div class="col-md-6">
                            <label for="telefono" class="form-label">Telefono</label>
                            <input type="text" class="form-control" id="telefono">
                        </div>
                    </div>
                    <br/>
                    <br/>
                    <hr>
                    
                    <div class="mb-3"  style="text-align: center">
                       
                        
                        <h5 style="align-content: center">Informacion tecnica</h5>
                      
                    </div>
                  
                    <br/>
                    <br/>
                    <br/> 
                    <br/> 



                    <div class="mb-3">
                    
                        <input type="text" class="form-control" id="email" placeholder="Nombre de la Maquina" name="nombreMaquina">
                    </div> 
                    <div class="row mb-3">
                        <div class="col-md-4">
                            
                            <input type="text" class="form-control" id="nombre" placeholder="Marca" name="marca">

                        </div>
                        <div class="col-md-4">
                          
                            <input type="number" placeholder="Cantidad" class="form-control" name="cantidad" id="apellido">

                        </div>
                        <div class="col-md-4">
                        
                            <input type="number" placeholder="Prioridad" class="form-control" name="prioridad" id="apellido">

                        </div>

                    </div>  
                    <div class="row mb-3">
                        <div class="col-md-4">
                          
                            <label class="form-label">Tipo de Maquina:</label>
                            <select class="form-select" aria-label="Default select example"  name="tipo">
                                <option value="calor">Maquina de Calor</option>
                                <option value="frio">Maquina de Frio</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="email" class="form-label">Ubicacion: </label>
                            <select class="form-select" aria-label="Default select example"  name="ubicacion">
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
                         <div  class="col-md-4">
                            <label for="telefono" class="form-label">Estado final de la Maquina</label>
                               <select class="form-select" aria-label="Default select example" name="Mantenimiento">
                                     <option value="correctivo">Bueno</option>
                                     <option value="preventivo">Malo</option>
                               </select>
                         </div>
                        
                    </div>

                     
                    <div class="row mb-3">
                        
                        <div class="col-md-4">
                                
                                    <label for="direccion" class="form-label">Tipo de Mantenimiento</label>
                                    <select class="form-select" aria-label="Default select example" name="Mantenimiento">
                                        <option value="correctivo">correctivo</option>
                                        <option value="preventivo">preventivo</option>
                                    </select>
                             
                             
                              
                        </div>
                        <div class="col-md-4">
                            <div>
                                <label for="" class="form-label">cambio de piezas</label>
                                <br/>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="hijos" class="form-check-input" id="hijos-si" value="1">
                                    <label for="hijos-si" class="form-check-label">Si</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="hijos" class="form-check-input" id="hijos-no" value="0"
                                        checked>
                                    <label for="hijos-no" class="form-check-label">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                      
                            <label >Anexar Foto de la pieza reemplazada:</label>
                            <br/>
                                
                             <input type="file" name="foto">
                            

                        </div>
                        
                    
                    </div>
                    <div class="row mb-3">

                        <div class="col-md-12">
                        <div>
                            <label for="numeroHijos" class="form-label">¿que piezas se cambiaron?</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                        </div>
                    </div>


                    </div>
                    
                    <div class="col-md-12"> 
                        <label for="email" class="form-label">Descripcion del Mantenimiento</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                    </div>
               
                  

                   
                        
                  
              
                


                  

                    <span class="d-block pb-2">Firma digital aqui</span>
                    <div class="signature mb-2" style="width: 100%; height: 200px;">
                        <canvas id="signature-canvas"
                            style="border: 1px dashed red; width: 100%; height: 200px;"></canvas>
                    </div>

                    <button type="submit" class="btn btn-primary mb-4">GUARDAR</button>
                </form>
            </div>
        </div>
    </div>
</body>
                

</html>