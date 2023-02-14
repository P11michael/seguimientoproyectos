<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Buzón de entrada</title>  
    </head>
    <body>
        <div class="container">
	        <section id="container">
                <div style="height: 30px;"></div>
                <div class="card-header">BUZÓN DE ENTRADA DE HOJAS DE RUTA</div>
                <div style="height: 30px;"></div>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">        
                                <table id="tablaPersonas" class="tabla table-striped" style="width:100%">
                                    <thead class="text-center">
                                    <thead class="text-center">
                                        <tr>
                                            <th>Hoja de</br>Ruta N°</th>
                                            <th>Asunto</th>
                                            <th>Fecha</th>  
                                            <th>Origen</th>
                                            <th>Descripción</th>                                
                                            <th>Detalles</th>
                                        </tr>
                                    </thead>
                                    <?php                            
                                    include 'includes/connection.php';
                                    $cod = $_SESSION['usuarioFunc'];
                                    $query = mysqli_query($conexion,"SELECT * FROM `hojaruta` WHERE Destino='$cod' GROUP BY NumeroHojaRuta");
                                    mysqli_close($conexion);
                                    $result = mysqli_num_rows($query);   
                                    if($result > 0){
                                        while ($data = mysqli_fetch_array($query)){                                                   
                                    ?>
                                    <tr ><form action="?p=solicitudServicio" class="form-signin" method="post">
                                        <td >  <input type="hidden" name="id_s" value=<?php echo $data['NumeroHojaRuta'] ?> /><?php echo $data['NumeroHojaRuta'] ?></td>
                                        <td><?php echo $data['Asunto'] ?></td>
                                        <td><?php echo $data['FechaHojaRuta'] ?></td>
                                        <td><?php echo $data['Origen'] ?></td>
                                        <td><?php echo $data['Descripcion'] ?></td>
                                        <td> <button type="submit"   id="solicitudM" name="solicitudM" class="btn btn-lg btn-primary btn-block" >Ver</button></td>
                                    </form>
                                    </tr>
                                    <?php 
                                        }
                                    }
                                ?>
                                    </thead>
                                    <tbody>                           
                                    </tbody>            
                                </table>                    
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