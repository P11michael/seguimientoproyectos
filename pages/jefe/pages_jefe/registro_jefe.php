<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro usuario unidad de gasto</title>
    
</head>
    <body>
            <div style="height: 30px;"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card shadow p-3 mb-5 bg-white">
                            <div class="card-header">REGISTRO DE USUARIO</div>
                                <div class="card-body">
                                    <form id="formulario" method="post" class="needs-validation" novalidate>
                                        <div class="form-row" style="display: flex;align-items: center;justify-content: center;">
                                            <div class="col-md-8 order-md-1">
                                                <div class="mb-3">
                                                    <!--label for="nombre">Nombre de usuario</label>-->
                                                    <input type="text" name="nameJefe" class="form-control" id="nameJefe" placeholder="Ingrese el nombre" pattern="[A-Za-zÑÁÉÍÓÚñáéíóú ]{3,50}" title="Numero de letras permitidos de 3 a 50" required>
                                                    <div class="invalid-feedback">
                                                        Nombre válido requerido
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <!--label for="nombre">Nombre de usuario</label>-->
                                                    <input type="text" name="apellidoPJefe" class="form-control" id="apellidoPJefe" placeholder="Ingrese el apellido paterno" pattern="[A-Za-zÑÁÉÍÓÚñáéíóú ]{3,50}" title="Numero de letras permitidos de 3 a 50" required>
                                                    <div class="invalid-feedback">
                                                        Apellido válido requerido
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <!--label for="nombre">Nombre de usuario</label>-->
                                                    <input type="text" name="apellidoMJefe" class="form-control" id="apellidoMJefe" placeholder="Ingrese el apellido materno" pattern="[A-Za-zÑÁÉÍÓÚñáéíóú ]{3,50}" title="Numero de letras permitidos de 3 a 50" required>
                                                    <div class="invalid-feedback">
                                                        Apellido válido requerido
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <!--<label for="nombre">Correo</label>-->
                                                    <input type="email" name="emailJefe" class="form-control" id="emailJefe" placeholder="Ingrese el correo electrónico" title="Numero de caracteres permitido 30" required>
                                                    <div class="invalid-feedback">
                                                        Correo válido requerido
                                                    </div>
                                                </div> 

                                                <div class="mb-3">
                                                    <!--<label for="nombre">Encargado</label>-->
                                                    <input type="password" name="contrasenaJefe" class="form-control" id="contrasenaJefe" placeholder="Ingrese la contraseña" minlength="3" title="Numero de caracteres permitidos de 3 a 30" required>
                                                    <div class="invalid-feedback">
                                                        Contraseña válida requerida
                                                    </div>
                                                </div>  

                                                <div class="mb-3">
                                                    <!--<label for="nombre">Encargado</label>-->
                                                    <input type="password" name="repcontrasenaJefe" class="form-control" id="repcontrasenaJefe" placeholder="Repita la contraseña" minlength="3" title="Numero de caracteres permitidos de 3 a 30" required>
                                                    <div class="invalid-feedback">
                                                        Contraseña válida requerida
                                                    </div>
                                                </div> 

                                                <div class="mb-3">
                                                    <select name="jefatura" class="custom-select d-block w-100" id="jefatura" required>
                                                        <option value="">Seleccione la jefatura</option>
                                                        <?php 
                                                            include 'includes/connection.php';
                                                            $cod = $_SESSION['cod_unidadG'];
                                                            $query = mysqli_query($conexion,"SELECT COD_UNIDAD_G, NOMBRE_UNIDAD_G FROM unidad_gas WHERE COD_UNIDAD_G = '$cod' OR COD_SUP_UNIDAD_G = '$cod'");
                                                            mysqli_close($conexion);
                                                            $result = mysqli_num_rows($query);   
                                                            if($result > 0){  
                                                                while ($data = mysqli_fetch_array($query)) {
                                                        ?>
                                                        <option value="<?php echo $data["COD_UNIDAD_G"]; ?>"><?php echo $data["NOMBRE_UNIDAD_G"]; ?></option>    
                                                                                      
                                                        <?php 
                                                                }

                                                            }
                                                        ?>

                                                    </select>                                       
                                                </div>  
                                                <div class="form-row">
                                                    <div class="col-md-6 order-md-1">
                                                        <input class="btn btn-primary btn-lg btn-block" value="Crear usuario" name="registerJefe" id="registerJefe" type="submit">
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