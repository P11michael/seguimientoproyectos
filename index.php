<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/imagenes/icon.gif" type="image/gif">
    <script src="librerias/js/popper-1.14.7.min.js"></script>
    <link rel="stylesheet" href="librerias/css/bootstrap.min.css">
    <link rel="stylesheet" href="librerias/css/styles.css">
    <link rel="stylesheet" href="librerias/css/slick.css">
    <link rel="stylesheet" href="librerias/css/slick-theme.css">
    <link rel="stylesheet" href="librerias/css/cabeceraCss.css">
    <link rel="stylesheet" href="librerias/css/body.css">
    <script src="librerias/js/jquery-3.3.1.min.js"></script>
    <script src="librerias/js/bootstrap.min.js"></script>
    <script src="librerias/archivos/script.js"></script>
    <script src="librerias/js/slider.js"></script>
    <script src="librerias/js/slick.js"></script>
    <script src="librerias/archivos/jquery.snow.js"></script>
    <title>Segumiento de proyectos</title>
</head>
<?php
if(isset($_GET['error'])){
    echo "<script>";
    echo    "alert('Error al autentificar');";
    echo "</script>";
}
?>
<header>
    <div>
        <nav class="navbar navbar-expand-lg navbar-custom padding-navbar">
            <div class="container">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navegacion,#navegacion2" aria-controls="navegacion" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navegacion">
                    <ul id="sub-header2" class="navbar-nav mr-auto"></ul>
                    <span class="navbar-text">
                        <script> fecha(); </script>
                    </span>
                </div>
            </div>
        </nav>
    <div>
    <div class="d-sm-none d-md-block d-none d-lg-block cabeceraCss">
        <div align="center" id="banner" >
            <img src="images/banner3.png" alt="">
        </div>
    </div>
</header>

<body>
    <div class="login">
        <?php
        require_once 'login/login.php';
        ?>
    </div>
    <?php
    if(isset($_GET['error'])){
        echo "<script>";
        echo    "alert('Error al autentificar');";
        echo "</script>";
    }
    ?>

        <footer class="container-fluid text-center footer-guest">
        <!DOCTYPE html>
        <hr>
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
            <div><br></div>
        </footer>
        <!--La libreria jquery.snow.js es obsoleta(21-01-2012)se sugiere poner un nav especifico para estas fechas-->
        <script>
            $(document).ready( function(){
            var date = new Date();
            if(date.getMonth()==11){
                $.fn.snow({
                    minSize: 10, //Tamaño mínimo del copo de nieve, 10 por defecto
                    maxSize: 20, //Tamaño máximo del copo de nieve, 10 por defecto
                    newOn: 1000, //Frecuencia (en milisegundos) con la que aparecen los copos de nieve, 500 por defecto
                    flakeColor: '#FFFFFF' //Color del copo de nieve, #FFFFFF por defecto
                });
            }
            });
            ajustarFooter();
        </script>
        </div>
    </body>
</html>