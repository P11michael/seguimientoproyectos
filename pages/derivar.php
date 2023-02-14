<!DOCTYPE html>
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">    
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="../librerias/js/popper-1.14.7.min.js"></script>
        <link rel="stylesheet" href="../librerias/css/bootstrap.min.css">
        <link rel="stylesheet" href="../librerias/css/styles.css">
        <link rel="stylesheet" href="../librerias/css/slick.css">
        <link rel="stylesheet" href="../librerias/css/slick-theme.css">
        <link rel="stylesheet" href="../librerias/css/cabeceraCss.css">
        <link rel="stylesheet" href="../librerias/css/body.css">
        <script src="../librerias/js/jquery-3.3.1.min.js"></script>
        <script src="../librerias/js/bootstrap.min.js"></script>
        <script src="../librerias/archivos/script.js"></script>
        <script src="../librerias/js/slider.js"></script>
        <script src="../librerias/js/slick.js"></script>
        <script src="../librerias/archivos/jquery.snow.js"></script>
        
        <title>Hoja de Ruta digital</title>
    </head>

    <body>    
        <div style="height: 0px;"></div>
        <div class="d-sm-none d-md-block d-none d-lg-block d-lg-block cabeceraCss">
            <div id="banner">
                <img src="../images/banner3.png" alt="">
            </div>
        <div>
        <div class="container">
            <div class="row">    
                <div class="col-lg-12">
                    <div class="card shadow p-3 mb-5 bg-white">        
                        <div class="card-header" align="center">CONSULTAR HOJA DE RUTA</div>
                        <div class="card-body">
                            <form id="formulario" method="post" class="needs-validation" novalidate>
                                <div class="form-row" style="display: flex;align-items: center;justify-content: center;">
                                    <div class="col-md-12 order-md-1">
                                        <div class="mb-3">
                                            <label>Fecha de la Consulta: <input type="date" name="fechaConsulta" class="form-control" id="fechaConsulta" required pattern="\d{4}-\d{2}-\d{2}" />
                                            <span class="validity"></span></label>
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" name="ciCiud" class="form-control" id="ciCiud" placeholder="Número de C.I." pattern="[0-9]{4,10}" title="Sólo debe escribir el Número de su C.I." required>
                                            <div class="invalid-feedback">
                                                Sólo debe escribir el Número de su C.I.
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" name="nombreCiud" class="form-control" id="nombreCiud" placeholder="Nombre completo del ciudadano" pattern="[A-Za-zÑÁÉÍÓÚñáéíóú ]{12,45}" title="Sólo debe escribir su Nombre completo" required>
                                            <div class="invalid-feedback">
                                                Sólo debe escribir su Nombre completo
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" name="numeroHR" class="form-control" id="numeroHR" placeholder="Número de Hoja de Ruta" pattern="[0-9]{1,4}" title="Sólo debe escribir el Número de Hoja de Ruta" required>
                                            <div class="invalid-feedback">
                                                Sólo debe escribir el Número de Hoja de Ruta
                                            </div>
                                        </div> 
                                        <div class="form-row">
                                            <div class="col-md-6 order-md-1">
                                                <input class="btn btn-primary btn-lg btn-block" value="Consultar Hoja de Ruta" name="consulta" id="consulta" type="submit">
                                            </div>
                                            <div class="col-md-6 order-md-2">
                                                <input type="button" class="btn btn-danger btn-lg btn-block" onclick="location.href='..'" value="Salir">
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
        <footer class="container-fluid text-center footer-guest">
                <!DOCTYPE html>
                <div class="container col-xs- col-sm- col-md-12 col-log-">
                    <div class="text-center">
                        <h6 class="d-inline-block">Contacto: sistemas_gamcol@colcapirhua.gob.bo , gamc@colcapirhua.gob.bo</h6>
                        <h6 class="d-inline-block">Teléfono: (+591 4)  4269983, (+591 4)  4269985</h6 >
                    </div>
                    <div class="text-center">
                        <h6>Sitios relacionados:
                            <a href="http://colcapirhua.gob.bo/" target="_blank">Página oficial G.A.M.C.</a>
                            <a href="https://www.facebook.com/municipiodecolcapirhua" target="_blank"> | Facebook</a>
                            <a href="https://www.youtube.com/channel/UCohZmqu9HSTgCPzYchEiGwA" target="_blank"> | Youtube</a>
                        </h6>
                    </div>
                    <div class="text-center">
                        <h6>Derechos Reservados © 2022 · Jefatura de Sistemas Informáticos</h6>
                    </div>
                </div>
            </footer>
        <?php
            include("../controlador/connection_register.php");
        ?>
    </body>

    </html>
