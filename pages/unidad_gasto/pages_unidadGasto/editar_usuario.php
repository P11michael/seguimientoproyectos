<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro usuario unidad de gasto</title>
    
</head>
    <body>
    <div style="height: 30px;"></div>       
                <div class="row">
                    <div class="col-lg-12">
                            <div class="card-header">PERFIL DE USUARIO</div>
                                <div class="card-body">
                                    <form id="formulario" action="RegisterUser.php" method="post" class="needs-validation" novalidate>
                                        <div class="form-row">
                                            <div class="col-md-4 order-md-1">
                                                <div class="container card">
                                                    <div class="mb-3">
                                                        <div class="col-lg-12 col text-center">
                                                            <img src="fotoPerfil/images.png" alt="" class="rounded-circle mx-auto d-block">
                                                            <div style="height: 30px;"></div>    
                                                            <input type="file" class="btn btn-info btn-block" name="actualizarFotoPerfilG" id="actualizarFotoPerfilG" value="Actualizar foto de perfil">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-8 order-md-2">                            
                                                <div class="card mb-2 bg-white">
                                                    <div class="card-header">Informacion personal</div>
                                                    <div class="card-body">
                                                        <div class="mb-2">
                                                            <div class="form-group row col">
                                                                <label for="nombre" class="mr-auto">Nombre</label>
                                                                <div class="col-sm-9">
                                                                <input type="text" name="nameUsuarioG" class="form-control" id="nameUsuarioG" value="<?php echo $_SESSION['nombre'];?>" placeholder="Ingrese el nombre" pattern="[A-Za-zÑÁÉÍÓÚñáéíóú ]{3,50}" title="Numero de letras permitidos de 3 a 50" required>
                                                                <div class="invalid-feedback">
                                                                    Nombre valido requerido
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mb-2">
                                                            <div class="form-group row col">
                                                                <label for="apellidop" class="mr-auto">Apellido paterno</label>
                                                                <div class="col-sm-9">
                                                                <input type="text" name="apellidoPUsuarioG" class="form-control ml-auto p-2" id="apellidoPUsuarioG"  value="<?php echo $_SESSION['apellidoP'];?>" placeholder="Ingrese el apellido paterno" pattern="[A-Za-zÑÁÉÍÓÚñáéíóú ]{3,50}" title="Numero de letras permitidos de 3 a 50" required>
                                                                <div class="invalid-feedback">
                                                                    Apellido valido requerido
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mb-2">
                                                            <div class="form-group row col">
                                                                <label for="apellidom" class="mr-auto">Apellido materno</label>
                                                                <div class="col-sm-9">
                                                                <input type="text" name="apellidoMUsuarioG" class="form-control" id="apellidoMUsuarioG"  value="<?php echo $_SESSION['apellidoM'];?>" placeholder="Ingrese el apellido materno" pattern="[A-Za-zÑÁÉÍÓÚñáéíóú ]{3,50}" title="Numero de letras permitidos de 3 a 50" required>
                                                                <div class="invalid-feedback">
                                                                    Apellido valido requerido
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mb-2">
                                                            <div class="form-group row col">
                                                                <label for="correo" class="mr-auto">Correo</label>
                                                                <div class="col-sm-9">
                                                                <input type="email" name="emailUsuarioG" class="form-control" id="emailUsuarioG"  value="<?php echo $_SESSION['email'];?>" placeholder="Ingrese el correo electrónico" title="Numero de caracteres permitido 30" required>
                                                                <div class="invalid-feedback">
                                                                    Correo válido requerido
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div> 
                                               
                                                <div class="card bg-white">
                                                    <div class="card-header">Cambiar contraseña</div>
                                                    <div class="card-body">
                                                        <div class="mb-3">
                                                            <div class="form-group row col">
                                                                <label for="correo" class="mr-auto">Antigua contraseña</label>
                                                                <div class="col-sm-9">
                                                                <input type="password" name="contrasenaAUsuarioG" class="form-control" id="contrasenaAUsuarioG" placeholder="Ingrese la antigua contraseña" minlength="3" title="Numero de caracteres permitidos de 3 a 30" required>
                                                                <div class="invalid-feedback">
                                                                    Contraseña valido requerido
                                                                </div>
                                                                </div>
                                                            </div>  
                                                        </div> 
                                                        <div class="mb-3">
                                                            <div class="form-group row col">
                                                                <label for="correo" class="mr-auto">Nueva contraseña</label>
                                                                <div class="col-sm-9">
                                                                <input type="password" name="contrasenaUsuarioG" class="form-control" id="contrasenaUsuarioG" placeholder="Ingrese la nueva contraseña" minlength="3" title="Numero de caracteres permitidos de 3 a 30" required>
                                                                <div class="invalid-feedback">
                                                                    Contraseña valido requerido
                                                                </div>
                                                                </div>
                                                            </div>  
                                                        </div>
                                                        <div class="mb-3">
                                                            <div class="form-group row col">
                                                                <label for="correo" class="mr-auto">Repetir</label>
                                                                <div class="col-sm-9">
                                                                <input type="password" name="repcontrasenaUsuarioG" class="form-control" id="repcontrasenaUsuarioG" placeholder="Repita la contraseña" minlength="3" title="Numero de caracteres permitidos de 3 a 30" required>
                                                                <div class="invalid-feedback">
                                                                    Contraseña valido requerido
                                                                </div>
                                                                </div>
                                                            </div> 
                                                        </div>
                                                        <div class="mb-3">
                                                            <div class="form-row">
                                                                <div class="col-md-6 order-md-1">
                                                                    <input type="submit" class="btn btn-success btn-lg btn-block" name="actualizarDatosG" id="actualizarDatosG" value="Actualizar datos">
                                                                </div>
                                                                <div class="col-md-6 order-md-2">
                                                                    <input type="reset" class="btn btn-danger btn-lg btn-block" name="cancelar" id="cancelar" value="Cancelar">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>      
                                        </div>
                                    </form>
                                </div>                     
                    </div>
                </div>
            <?php
                include("../../controlador/connection_register.php");
            ?>
    </body>
</html>