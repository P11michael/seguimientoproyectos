<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../bootstrap/validacion/form-validation.css">
    <link rel="stylesheet" href="../assets/css/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="../librerias/datatables/datatables.min.css"/>
    <link rel="stylesheet"  type="text/css" href="../librerias/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css"> 
    <link rel="stylesheet" href="../librerias/css/estilo.css">
    <title>Sistema de Seguimiento a Hojas de Ruta</title>
</head>

<body>
    <header style="height: 30px;">
        <div class="header">
            <div class=" d-flex justify-content-between align-items-center">
                <div class="col-6 pt-1">
                    <a class="footer0">Sistema de Seguimiento a Hojas de Ruta</a>
                </div>
                <div class="col-6 d-flex justify-content-end align-items-center">
                    <a class="footer0"><?php date_default_timezone_set("America/La_Paz"); echo date('d/m/Y');?></a>
                    <a class="footer0"> | </a>
                    <a class="footer0" style="text-transform: uppercase;">ADMINISTRADOR</a> 
                </div>
            </div>
        </div>  
    </header>
    <div align="center" id="banner" >
        <img src="..\images\banner2.png" alt="">
    </div>
    <nav class="navbar navbar-expand-md navbar-dark bg-company-red">
        <a class="navbar-brand" href="homeAdmin.php">GOBIERNO AUTÓNOMO MUNICIPAL DE COLCAPIRHUA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <div class="navbar-nav">
                    <li class="<?php echo $pagina == 'inicio' ? 'active' : ''; ?>"><a class="nav-item nav-link" href="?p=inicio">Inicio</a></li>
                    <li class="nav-item dropdown">
                    <a href="#" class="<?php echo $pagina == 'lista_usuario' || $pagina == 'registro_useracad' ? 'active' : ''; ?> nav-link dropdown-toggle" data-toggle="dropdown" id="usuario">Usuario</a>
                    <div class="dropdown-menu">
                        <a href="?p=registro_useracad" class="dropdown-item">Nuevo usuario Administrativo </a>
                        <a href="?p=lista_usuario" class="dropdown-item">Lista de Usuarios</a>
                    </div>
                    </li>
                            
                    <li class="nav-item dropdown">
                        <a href="#" class="<?php echo $pagina == 'listaSolicitudMaterial' || $pagina == 'listaSolicitudServicios'? 'active' : '';  ?> nav-link dropdown-toggle" data-toggle="dropdown" id="solicitud">Solicitudes</a>
                        <div class="dropdown-menu">
                            <a href="?p=listaSolicitudMaterial" class="dropdown-item">Materiales</a>
                            <a href="?p=listaSolicitudServicios" class="dropdown-item">Servicios</a>
                        </div>
                    </li>
                    <li class=""><a class="nav-item nav-link" href="../controlador/salir.php">Cerrar sesión</a></li>
                          
                </div>
            </ul>
        </div>
    </nav>