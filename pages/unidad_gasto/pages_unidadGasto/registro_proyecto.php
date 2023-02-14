<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>REGISTRAR PROYECTO</title>

</head>
    <body>
            <div style="height: 30px;"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card shadow p-3 mb-5 bg-white">
                            <div class="card-header">REGISTRAR PROYECTO</div>
                                <div class="card-body">
                                    <form id="formulario" method="post" class="needs-validation" novalidate>
                                        <div class="form-row" style="display: flex;align-items: center;justify-content: center;">
                                            <div class="col-md-12 order-md-1">
                                                <div class="mb-3">
                                                    <input type="text" name="idProyecto" class="form-control" id="idProyecto" placeholder="Id del proyecto" pattern="[A-Za-z0-9ÑÁÉÍÓÚñáéíóú #°/-.,''&]{1,16}" title="Número de caracteres permitidos de 1 a 16" required>
                                                    <div class="invalid-feedback">
                                                        Ingrese el ID del proyecto, por favor de 1 a 16 caracteres
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" name="nombreProyecto" class="form-control" id="nombreProyecto" placeholder="Nombre del proyecto" pattern="[A-Za-z0-9ÑÁÉÍÓÚñáéíóú #°/-.,''&]{10,66}" title="Número de caracteres permitidos de 10 a 66" required>
                                                    <div class="invalid-feedback">
                                                        Ingrese el nombre del proyecto, por favor de 10 a 66 caracteres
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <select name="distrito" class="custom-select d-block w-50" id="distrito" required>
                                                        <option value="">Seleccione el distrito beneficiado del proyecto</option>                                            
                                                          <option value="A">A</option>    
                                                          <option value="B">B</option>    
                                                          <option value="C">C</option>    
                                                          <option value="D">D</option>  
                                                          <option value="E">E</option>    
                                                         </select>                                       
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" name="otb" class="form-control" id="otb" placeholder="OTB beneficiada del proyecto" pattern="[A-Za-z/-., &'']{5,20}" title="Número de caracteres permitidos de 5 a 20" required>
                                                    <div class="invalid-feedback">
                                                        Ingrese el nombre de la OTB beneficiada con el proyecto, por favor de 5 a 20 caracteres
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" name="precioReferencial" class="form-control" id="precioReferencial" placeholder="Precio referencial del proyecto (usar punto decimal)" pattern="[0-9.]{5,20}" title="Número de caracteres permitidos de 5 a 20" required>
                                                    <div class="invalid-feedback">
                                                        Ingrese el precio referencial del proyecto, por favor de 5 a 20 caracteres
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" name="responsableProyecto" class="form-control" id="responsableProyecto" placeholder="Responsable de Planificación del proyecto" pattern="[A-Za-z/-., ]{12,40}" title="Número de caracteres permitidos de 12 a 40">
                                                    <div class="invalid-feedback">
                                                        Ingrese el nombre del Responsable de Planificación del proyecto, por favor de 12 a 40 caracteres
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" name="presupuestoProyecto" class="form-control" id="presupuestoProyecto" placeholder="Presupuesto del proyecto (usar punto decimal)" pattern="[0-9.]{5,20}" title="Número de caracteres permitidos de 5 a 20" required>
                                                    <div class="invalid-feedback">
                                                        Ingrese el presupuesto del proyecto, por favor de 5 a 20 caracteres
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label>Fecha de inicio de proceso de contratación: <input type="date" name="fechaInicioProcesoContratacion" class="form-control" id="fechaInicioProcesoContratacion" pattern="\d{4}-\d{2}-\d{2}" />
                                                    <span class="validity"></span></label>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" name="etapa" class="form-control" id="etapa" placeholder="Etapa del proyecto" pattern="[A-Za-z/-., ]{12,40}" title="Número de caracteres permitidos de 12 a 40" required>
                                                    <div class="invalid-feedback">
                                                        Ingrese el presupuesto del proyecto, por favor de 12 a 40 caracteres
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label>Fecha de fin de plazo: <input type="date" name="fechaFinPlazo" class="form-control" id="fechaFinPlazo" pattern="\d{4}-\d{2}-\d{2}" />
                                                    <span class="validity"></span></label>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" name="codigoSisin" class="form-control" id="codigoSisin" placeholder="Código SISINWEB del proyecto" pattern="[0-9]{10,20}" title="Número de caracteres permitidos de 10 a 20" required>
                                                    <div class="invalid-feedback">
                                                        Ingrese el código SISINWEB del proyecto, por favor de 10 a 20 caracteres
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" name="estado" class="form-control" id="estado" placeholder="Estado del proyecto" pattern="[A-Za-z/-., ]{6,20}" title="Número de caracteres permitidos de 6 a 20" required>
                                                    <div class="invalid-feedback">
                                                        Ingrese el presupuesto del proyecto, por favor de 12 a 40 caracteres
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" name="modalidadContratacion" class="form-control" id="modalidadContratacion" placeholder="Modalidad de contratación del proyecto" pattern="[A-Za-z0-9ÑÁÉÍÓÚñáéíóú #°/-.,''&]{10,66}" title="Número de caracteres permitidos de 10 a 66">
                                                    <div class="invalid-feedback">
                                                        Ingrese la modalidad de Contratación del proyecto, por favor de 10 a 66 caracteres
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" name="adjudicatario" class="form-control" id="adjudicatario" placeholder="Adjudicatario del proyecto" pattern="[A-Za-z0-9ÑÁÉÍÓÚñáéíóú #°/-.,''&]{10,36}" title="Número de caracteres permitidos de 10 a 36">
                                                    <div class="invalid-feedback">
                                                        Ingrese el adjudicatario del proyecto, por favor de 10 a 36 caracteres
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" name="supervisor" class="form-control" id="supervisor" placeholder="Supervisor de Obras Públicas del proyecto" pattern="[A-Za-zÑÁÉÍÓÚñáéíóú /-.,''&{10,36}" title="Número de caracteres permitidos de 10 a 36">
                                                    <div class="invalid-feedback">
                                                        Ingrese el Supervisor de Obras Públicas del proyecto, por favor de 10 a 36 caracteres
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label>Fecha de Orden de proceder: <input type="date" name="fechaOrdenProceder" class="form-control" id="fechaOrdenProceder" pattern="\d{4}-\d{2}-\d{2}" />
                                                    <span class="validity"></span></label>
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" name="aperturaProgramatica" class="form-control" id="aperturaProgramatica" placeholder="Apertura Programática del proyecto ***-****-***" pattern="[0-9 -{3,12}" title="Número de caracteres permitidos de 3 a 12">
                                                    <div class="invalid-feedback">
                                                        Ingrese la Apertura Programática del proyecto, por favor de 3 a 12 caracteres
                                                    </div>
                                                </div>

                                                <div class="form-row">
                                                    <div class="col-md-6 order-md-1">
                                                        <input class="btn btn-primary btn-lg btn-block" value="Registrar" name="registro_proyecto" id="registro_proyecto" type="submit">
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