<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Hoja de Ruta digital</title>
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../librerias/css/estilo_login.css">
</head>
    <body>
            <div style="height: 30px;"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card shadow p-3 mb-5 bg-white">
                            <div class="card-header">HOJA DE RUTA</div>
                                <div class="card-body">
                                    <form id="formulario" method="post" class="needs-validation" novalidate>
                                        <div class="form-row" style="display: flex;align-items: center;justify-content: center;">
                                            <div class="col-md-12 order-md-1">
                                                <div class="mb-3">
                                                    <label>Fecha de la Hoja de Ruta: <input type="date" name="fechaEmision" class="form-control" id="fechaEmision" required pattern="\d{4}-\d{2}-\d{2}" />
                                                    <span class="validity"></span></label>
                                                </div>
                                                <div class="mb-3">
                                                    <select name="derivacionNro" class="custom-select d-block w-50" id="derivacionNro" required>
                                                        <option value="">Seleccione el Número de Derivación</option>                                            
                                                          <option value="1">1</option>    
                                                          <option value="2">2</option>    
                                                          <option value="3">3</option>    
                                                          <option value="4">4</option>  
                                                          <option value="5">5</option>    
                                                          <option value="6">6</option>    
                                                          <option value="7">7</option>    
                                                          <option value="8">8</option> 
                                                         </select>                                       
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" name="numeroHR" class="form-control" id="numeroHR" placeholder="Número de Hoja de Ruta" pattern="[0-9]{1,4}" title="Sólo debe escribir el Número de Hoja de Ruta" required>
                                                    <div class="invalid-feedback">
                                                        Sólo debe escribir el Número de Hoja de Ruta
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <input type="text" name="procedencia" class="form-control" id="procedencia" placeholder="Procedencia" pattern="[A-Za-zÑÁÉÍÓÚñáéíóú ]{3,45}" title="Cantidad de letras permitidas: de 3 a 45" required>
                                                    <div class="invalid-feedback">
                                                        Ingrese la Procedencia de la Hoja de Ruta, por favor de 3 a 45 caracteres
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <input type="text" name="asunto" class="form-control" id="asunto" placeholder="Asunto" pattern="[A-Za-zÑÁÉÍÓÚñáéíóú ]{3,45}" title="Cantidad de letras permitidas: de 3 a 45" required>
                                                    <div class="invalid-feedback">
                                                        Ingrese el Asunto de la Hoja de Ruta, por favor de 3 a 45 caracteres
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <input type="text" name="origen" class="form-control" id="origen" placeholder="Origen" pattern="[A-Za-zÑÁÉÍÓÚñáéíóú ]{3,60}" title="Numero de letras permitidos de 8 a 60" required>
                                                    <div class="invalid-feedback">
                                                        Ingrese el Origen, por favor de 8 a 60 caracteres
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <input type="text" name="destino" class="form-control" id="destino" placeholder="Destino" pattern="[A-Za-zÑÁÉÍÓÚñáéíóú ]{3,60}" title="Numero de letras permitidos de 8 a 60" required>
                                                    <div class="invalid-feedback">
                                                        Ingrese el Destino, por favor de 8 a 60 caracteres
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" name="descripcion" class="form-control" id="descripcion" placeholder="Descripción" pattern="[A-Za-zÑÁÉÍÓÚñáéíóú ]{8,60}" title="Numero de letras permitidos de 8 a 60" required>
                                                    <div class="invalid-feedback">
                                                        Ingrese la Descripción, por favor de 8 a 60 caracteres
                                                    </div>
                                                </div>
                                             
                                                <div class="form-row">
                                                    <div class="col-md-6 order-md-1">
                                                        <input class="btn btn-primary btn-lg btn-block" value="Atender Hoja de Ruta" name="solicitud_hojaruta" id="solicitud_hojaruta" type="submit">
                                                    </div>
                                                    <div class="col-md-6 order-md-2">
                                                        <input class="btn btn-danger btn-lg btn-block" name="cancelar" id="cancelar" value="Cancelar" type="reset">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php
                include("../../../controlador/connection_register.php");
            ?>
    </body>
</html>