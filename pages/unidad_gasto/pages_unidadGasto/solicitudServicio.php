
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../librerias/css/stylesSolicitud.css">
    <title>Lista de Solicitudes</title>
</head>
<body>
    <div class="container">
        <section id="container">
        <?php
        $id=$_POST['id_s'];
        $id=$_POST['id_s'];
        include 'includes/connection.php';
        $cod = $_SESSION['tipoUsuario'];
        $query = mysqli_query($conexion,"SELECT * FROM `hojaruta` WHERE NumeroHojaRuta='$id'");
        mysqli_close($conexion);
        $result = mysqli_num_rows($query);   
        //if($result > 0){
        $data = mysqli_fetch_array($query)
        
        ?>
        <div style="height: 30px;"></div>
        <div class="container">
            <div class="row">   
                <div class="formularioMateriales">
                    <div class="cabecera"> 
                        <div class="photo"><img src="../../images/img3.png" alt="Photo" style="width:100%;"></img></div>
                        <div class="titulo">
                            
                            <div class="fechaEmision">
                                <table border="1" class="tbdatos">
                                    <tr>
                                        <th colspan="3">Hoja de Ruta Tipo: Despacho</th>                                    </tr>
                                    <tr>
                                        <td>Nro</td><td>Procedencia</td><td>Asunto</td>
                                    </tr>
                                    <tr>
                                        <td><?php echo $data['NumeroHojaRuta'] ?></td>
                                        <td><?php echo $data['Procedencia'] ?></td>
                                        <td><?php echo $data['Asunto'] ?>  </h7></td>
                                    </tr>
                                    <tr>
                                </table>
                            </div>
                            <div class="fechaEmision">
                                <table border="1" class="tbfecha">
                                    <tr>
                                        <th colspan="3"> Fecha de Emisión</th>                                    </tr>
                                    <tr>
                                        <td>Día</td><td>Mes</td><td>Año</td>
                                    </tr>
                                    <tr>
                                        <td><?php echo substr($data['FechaHojaRuta'] ,8,9) ?></td>
                                        <td><?php echo substr($data['FechaHojaRuta'] ,5,2) ?></td>
                                        <td><?php echo substr($data['FechaHojaRuta'] ,0,4) ?></td>
                                    </tr>
                                    <tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="datos">
                        <table border="1" class="tbPrincipal">
                            <tr class="filaPrincipal">
                                <th>N:</th>
                                <th colspan="15">Origen</th>
                                <th colspan="15">Destino</th>
                                <th colspan="15">Fecha</th>
                                <th colspan="15">Descripción</th>
                            </tr>
                            <?php                            
                            include 'includes/connection.php';
                            $query1 = mysqli_query($conexion,"SELECT * FROM `hojaruta` WHERE NumeroHojaRuta='$id' ORDER BY FechaHojaRuta ASC");
                            mysqli_close($conexion);
                            $result1 = mysqli_num_rows($query1);   
                            if($result1 > 0){
                                $numero=1;
                                while ($data1 = mysqli_fetch_array($query1)) {                                                   
                                ?>
                                <tr class="filaPrincipal">
                                    <td><?php echo $numero ?>  </td>
                                    <td colspan="15"> <h6><?php echo $data1['Origen'] ?> </h6></td>
                                    <td colspan="15"> <h6><?php echo $data1['Destino'] ?> </h6></td>
                                    <td colspan="15"> <h6><?php echo $data1['FechaHojaRuta'] ?> </h6></td>
                                    <td colspan="15"> <h6><?php echo $data1['Descripcion'] ?> </h6></td>
                                    <?php $numero++; ?>
                                </tr>
                                
                                <?php 
                                }
                            }
                                ?>
                        </table>
                        <div class="col-md-2">
                                <a href="#" class="nav-link dropdown-toggle font-weight-bold " data-toggle="dropdown" id="solicitud">Archivo Adjuntado</a>
                            </div>
                    </div>
                </div>    
            </div>  
        </div>
        <?php
        ?>
        </section>
    </div> 
</body>
</html>