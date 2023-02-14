<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>REGISTRAR REFORMULADO</title>

</head>
    <body>
            <div style="height: 30px;"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card shadow p-3 mb-5 bg-white">
                            <div class="card-header">REGISTRAR REFORMULADO</div>
                                <div class="card-body">
                                    <form id="formulario" method="post" class="needs-validation" novalidate>
                                        <div class="form-row" style="display: flex;align-items: center;justify-content: center;">
                                            <div class="col-md-12 order-md-1">
                                                <div class="mb-3">
                                                    <label>Fecha de aprobación del reformulado: <input type="date" name="fechaEmision" class="form-control" id="fechaEmision" required pattern="\d{4}-\d{2}-\d{2}" />
                                                    <span class="validity"></span></label>
                                                </div>
                                                <div class="mb-3">
                                                    <label>Fecha de inicio del reformulado: <input type="date" name="fechaInicio" class="form-control" id="fechaInicio" required pattern="\d{4}-\d{2}-\d{2}" />
                                                    <span class="validity"></span></label>
                                                </div>
                                                <div class="mb-3">
                                                    <select name="idReformulado" class="custom-select d-block w-50" id="idReformulado" required>
                                                        <option value="">Seleccione el Número de Reformulado</option>                                            
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
                                                    <input type="text" name="leyResolucion" class="form-control" id="leyResolucion" placeholder="Ley o Resolución de respaldo" pattern="[A-Za-zÑÁÉÍÓÚñáéíóú #°/-.,]{3,60}" title="Número de caracteres permitidos de 8 a 60" required>
                                                    <div class="invalid-feedback">
                                                        Ingrese la Ley o Resolución de respaldo, por favor de 8 a 60 caracteres
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="col-md-6 order-md-1">
                                                        <input class="btn btn-primary btn-lg btn-block" value="Registrar" name="registro_reformulado" id="registro_reformulado" type="submit">
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
                include("../../controlador/connection_register.php");
            ?>
    </body>
</html>

