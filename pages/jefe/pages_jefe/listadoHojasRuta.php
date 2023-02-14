<?php
include_once '../../controlador/connection.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM hojaruta";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
	    <meta charset="UTF-8">
	    <title>Lista de Hojas de Ruta</title>
    </head>
    <body>
    <div class="container">
	    <section id="container">
            <div style="height: 30px;"></div>
            <div class="card-header">LISTADO HISTÓRICO DE HOJAS DE RUTA</div>
            <div style="height: 30px;"></div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">        
                            <table id="tablaPersonas" class="tabla table-striped" style="width:100%">
                                <thead class="text-center">
                                    <tr>
                                        <th>Hoja de Ruta</br>Tipo</th>
                                        <th>Hoja de</br>Ruta N°</th>
                                        <th>Fecha</th>
                                        <th>Procedencia</th>
                                        <th>Asunto</th>
                                        <th>Estado</th>                             
                                    </tr>
                                </thead>
                                <tbody>
                                <?php                            
                                foreach($data as $dat) {                                                        
                                ?>
                                <tr>
                                    <td><?php echo $dat['TipoHojaRuta'] ?></td>
                                    <td><?php echo $dat['NumeroHojaRuta'] ?></td>
                                    <td><?php echo $dat['FechaHojaRuta'] ?></td>
                                    <td><?php echo $dat['Procedencia'] ?></td>    
                                    <td><?php echo $dat['Asunto'] ?></td>
                                    <td><?php echo $dat['Estado'] ?></td> 
                                    <td></td>
                                </tr>
                                <?php
                                }
                                ?>                                
                                </tbody>        
                            </table>                    
                        </div>
                    </div>
                </div>  
            </div>    
        </section>
    </div> 
    </body>
</html>