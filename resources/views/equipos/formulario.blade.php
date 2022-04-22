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
                <h3>Formulario</h3>
                <hr>
                <form id="form">
                    <div class="mb-3">
                        <label for="curso" class="form-label">Curso al que aspiro</label>
                        <select class="form-select" id="curso">
                            <option value="">Seleccione un curso</option>
                            <option value="Desarrollo de aplicaciones web">Desarrollo de aplicaciones web</option>
                            <option value="Desarrollo de aplicaciones moviles">Desarrollo de aplicaciones moviles
                            </option>
                        </select>
                    </div>

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
                            <label for="direccion" class="form-label">Direccion</label>
                            <input type="text" class="form-control" id="direccion">
                        </div>
                        <div class="col-md-6">
                            <label for="telefono" class="form-label">Telefono</label>
                            <input type="text" class="form-control" id="telefono">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-2">
                            <div>
                                <label for="" class="form-label">Tiene hijos</label>
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
                        <div class="col-md-10">
                            <div>
                                <label for="numeroHijos" class="form-label">Cuantos hijos tiene?</label>
                                <select class="form-select" id="numeroHijos">
                                    <option value="0">Seleccione una opcion</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="Mas de 4">Mas de 4</option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="row mb-3">
                        <div class="col-md-3">
                            <div>
                                <label for="" class="form-label">Tiene alguna discapacidad?</label>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="discapacidad" class="form-check-input"
                                        id="discapacidad-si" value="1">
                                    <label for="discapacidad-si" class="form-check-label">Si</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="discapacidad" class="form-check-input"
                                        id="discapacidad-no" value="0" checked>
                                    <label for="discapacidad-no" class="form-check-label">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div>
                                <label for="discapacidad-desc" class="form-label">Cual es la discapacidad?</label>
                                <input type="text" class="form-control" id="discapacidad-desc">
                            </div>
                        </div>
                    </div>

                    <span class="d-block pb-2">Firma digital aqui</span>
                    <div class="signature mb-2" style="width: 100%; height: 200px;">
                        <canvas id="signature-canvas"
                            style="border: 1px dashed red; width: 100%; height: 200px;"></canvas>
                    </div>

                    <button type="submit" class="btn btn-primary mb-4">Generar PDF</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>