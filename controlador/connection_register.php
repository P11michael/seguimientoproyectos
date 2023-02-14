<?php
//inicio de sesion 
include("connection.php");
if (isset($_POST['ingresar'])){
    $user = $_POST['Usuario'];
    $pass = ($_POST['Contrasena']);

    $resultado = mysqli_query($conexion,"SELECT * FROM usuario WHERE UsuarioLog = '$user' AND ContrasenaLog = '$pass'");
    $row = mysqli_fetch_array($resultado);
    if(mysqli_num_rows($resultado) > 0){    
        session_start();
        $_SESSION['active'] = true;
        $_SESSION['id']=$row['IdUsuario'];
        $_SESSION['tipoUsuario']=$row['TipoUsuario'];
        $_SESSION['NombreUsuario']=$row['NombreUsuario'];
        $_SESSION['contrasenaLog']=$row['ContrasenaLog'];
        header('location: ../pages/unidad_gasto/home_unidadGasto.php');
    }else{
            echo "<script>Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: '¡el usuario no existe!' 
            })</script>";
            header('location:  ../index.php'); 
        }   
    }


if (isset($_POST['salir'])){
    echo header('location:  ../index.php');
}

//ir a consulta
if (isset($_POST['consultar'])){
    session_start();
    $_SESSION['active'] = true;
    $_SESSION['id']=$row['IdCiud'];
    $_SESSION['fecha']=$row['FechaConsulta'];
    $_SESSION['nombreCiud']=$row['NombreCiud'];
    $_SESSION['ci']=$row['Ci'];
    $_SESSION['tipoUsuario']=$row['TipoUsuario'];
    header('location: ../pages/derivar.php');
}  

// registro de reformulado 
if (isset($_POST['registro_reformulado'])) {
    $fechainicio = trim($_POST['fechaInicio']);
    $fechaemision = trim($_POST['fechaEmision']);
    $leyresolucion = trim($_POST['leyResolucion']);
    $idreformulado = trim($_POST['idReformulado']);
    $cod = $_SESSION['id'];

    $enviar_a_unidad = mysqli_query($conexion,"SELECT IdUsuario, NombreUsuario FROM usuario WHERE IdUsuario = '$cod'");
    if ($capturado = mysqli_fetch_row($enviar_a_unidad)) {
        $id_unidad= trim($capturado[0]);
        $nombre_unidad = trim($capturado[1]);
        $consulta = "INSERT INTO reformulado(IdReformulado,FechaAprobacion,FechaInicio,LeyResolucion) VALUES ('$idreformulado', '$fechaemision','$fechainicio','$leyresolucion')";
    }

    $resultado = mysqli_query($conexion,$consulta);
    if ($resultado) {
        echo "<script>Swal.fire({
            icon: 'success',
            title: 'Hecho',
            text: 'Reformulado registrado' 
        })</script>";
        $rs = mysqli_query($conexion,"SELECT MAX(IdReformulado) FROM reformulado");
        if ($row = mysqli_fetch_row($rs)) {
            $idsol = trim($row[0]);
        }
    }else{
        echo "<script>Swal.fire({
            icon: 'error',
            title: 'Error!',
            text: 'Revise los campos' 
        })</script>";
    }     
}

// registro de proyecto
if (isset($_POST['registro_proyecto'])) {
    $idproyecto = trim($_POST['idProyecto']);
    $nombreproyecto = trim($_POST['nombreProyecto']);
    $distrito = trim($_POST['distrito']);
    $otb = trim($_POST['otb']);
    $precioreferencial = trim($_POST['precioReferencial']);
    $responsableproyecto = trim($_POST['responsableProyecto']);
    $presupuestoproyecto = trim($_POST['presupuestoProyecto']);
    $fechainicioprocesocontratacion = trim($_POST['fechaInicioProcesoContratacion']);
    $etapa = trim($_POST['etapa']);
    $fechafinplazo = trim($_POST['fechaFinPlazo']);
    $codigosisin = trim($_POST['codigoSisin']);
    $estado = trim($_POST['estado']);
    $modalidadcontratacion = trim($_POST['modalidadContratacion']);
    $adjudicatario = trim($_POST['adjudicatario']);
    $supervisor = trim($_POST['supervisor']);
    $fechaordenproceder = trim($_POST['fechaOrdenProceder']);
    $aperturaprogramatica = trim($_POST['aperturaProgramatica']);
    $cod = $_SESSION['id'];

    $enviar_a_unidad = mysqli_query($conexion,"SELECT IdUsuario, NombreUsuario FROM usuario WHERE IdUsuario = '$cod'");
    if ($capturado = mysqli_fetch_row($enviar_a_unidad)) {
        $id_unidad= trim($capturado[0]);
        $nombre_unidad = trim($capturado[1]);

        $consulta = "INSERT INTO proyecto(IdProyecto,NombreProyecto,Distrito,OTB,PrecioReferencialProyecto,ResponsableProyecto,PresupuestoProyecto,InicioProcesoContratacion,Etapa,FechaFinPlazo,CodigoSISINWEB,Estado,ModalidadContratacion,Adjudicatario,Supervisor,FechaOrdenProceder,AperturaProgramatica_IdAperturaProgramatica) VALUES ('$idproyecto', '$nombreproyecto','$distrito','$otb', '$precioreferencial','$responsableproyecto','$presupuestoproyecto','$fechainicioprocesocontratacion','$etapa', '$fechafinplazo','$codigosisin','$estado', '$modalidadcontratacion','$adjudicatario','$supervisor','$fechaordenproceder','$aperturaprogramatica')";
    }

    $resultado = mysqli_query($conexion,$consulta);
    if ($resultado) {
        echo "<script>Swal.fire({
            icon: 'success',
            title: 'Hecho',
            text: 'Proyecto registrado' 
        })</script>";
        $rs = mysqli_query($conexion,"SELECT MAX(IdProyecto) FROM proyecto");
        if ($row = mysqli_fetch_row($rs)) {
            $idsol = trim($row[0]);
        }
    }else{
        echo "<script>Swal.fire({
            icon: 'error',
            title: 'Error!',
            text: 'Revise los campos' 
        })</script>";
    }     
}

// consultar hoja de ruta
if (isset($_POST['consulta'])) {
    $ciCiud = trim($_POST['ciCiud']);
    $fechaConsulta = trim($_POST['fechaConsulta']);
    $nombreCiud = trim($_POST['nombreCiud']);
    $numeroHR = trim($_POST['numeroHR']);

    $consulta = "INSERT INTO ciudadano(IdCiud,FechaConsulta,NombreCiud,Ci,TipoUsuario) VALUES ('','$fechaConsulta','$nombreCiud','$ciCiud','4')";
    $resultado = mysqli_query($conexion,$consulta);
    $consulta2 = "SELECT Destino FROM hojaruta WHERE NumeroHojaRuta = '$numeroHR' and DerivacionNro = (SELECT MAX(DerivacionNro) FROM hojaruta)";
    $resultado2 = mysqli_query($conexion,$consulta2);
    $row = mysqli_fetch_array($resultado2);
    $dest = $row[0];
    $consulta3 = "SELECT Ubicacion FROM funcionario WHERE UsuarioFunc = '$dest'";
    $resultado3 = mysqli_query($conexion,$consulta3);
    $ubi = mysqli_fetch_array($resultado3);
    $lug = $ubi[0]; 
    if ($dest) {
        echo "<script type='text/javascript'>alert('Su Hoja de ruta $numeroHR se encuentra en la oficina de $dest , puede obtener mayor información en $lug');</script>";
    }else{
        echo "<script type='text/javascript'>alert('No se encontró la Hoja de Ruta, verifique el número por favor');</script>";
    }     
}

if (isset($_POST['Reenviar'])) {
    $derivacionNro = trim($_POST['derivacionNro']);
    $numeroHR = trim($_POST['numeroHR']);
    $fechaHR = trim($_POST['fechaEmision']);
    $procedencia = trim($_POST['procedencia']);
    $asunto = trim($_POST['asunto']);
    $origen = trim($_POST['origen']);
    $destino = trim($_POST['destino']);
    $descripcion = trim($_POST['descripcion']);
    $cod = $_SESSION['id'];

    $enviar_a_unidad = mysqli_query($conexion,"SELECT IdFunc, UsuarioFunc FROM funcionario WHERE IdFunc = '$cod'");
    if ($capturado = mysqli_fetch_row($enviar_a_unidad)) {
        $id_unidad= trim($capturado[0]);
        $nombre_unidad = trim($capturado[1]);

        $consulta = "INSERT INTO hojaruta(DerivacionNro,NumeroHojaRuta,FechaHojaRuta,Procedencia,Asunto,Origen,Destino,Descripcion) VALUES ('$derivacionNro', '$numeroHR','$fechaHR','$procedencia', '$asunto','$origen','$destino','$descripcion')";
    }

    $resultado = mysqli_query($conexion,$consulta);
    if ($resultado) {
        echo "<script>Swal.fire({
            icon: 'success',
            title: 'Hecho',
            text: 'Creación/derivación correcta' 
        })</script>";
        $rs = mysqli_query($conexion,"SELECT MAX(NumeroHojaRuta) FROM hojaruta");
        if ($row = mysqli_fetch_row($rs)) {
            $idsol = trim($row[0]);
        }
    }else{
        echo "<script>Swal.fire({
            icon: 'error',
            title: 'Error!',
            text: 'Revise los campos' 
        })</script>";
    }     
}

// observacion de solicitud de servicio 
if (isset($_POST['registerObsSer'])) {
    $fecha = date('d-m-Y');
    $descripcion = trim($_POST['descripcion']);
    $destino = trim($_POST['destino']);
    $id     = trim($_POST['numeroHR']);
    
    $consulta = "UPDATE ´hojaruta´ SET FechaHojaRuta='$fecha', Descripcion='$descripcion', Destino='$destino' WHERE NumeroHojaRuta = '$id'";
    $resultado = mysqli_query($conexion,$consulta);
    if ($resultado) {
        echo "<script>Swal.fire({
            icon: 'success',
            title: '¡Hecho!',
            text: '¡Observación emitida en la Solicitud de Servicio!' 
        })</script>";
    }else{
        echo "<script>Swal.fire({
            icon: 'error',
            title: 'Error!',
            text: '¡No se pudo emitir la observación!' 
        })</script>";
    }   
}



 // actualizar y reenviar solicitud de servicio
 if (isset($_POST['Reenviar'])) {
    $id_sol = trim($_POST['numeroHR']);
    $justi = trim($_POST['descripcion']);
    $monto = trim($_POST['destino']);
    $nombre_E= trim($_POST['nombreO']);

    $consulta ="UPDATE hojaruta SET Descripcion = '$justi', Destino ='$monto', Origen ='$nombre_E' WHERE NumeroHojaRuta = $id_sol";
    $resultado = mysqli_query($conexion,$consulta);
    if ($resultado) {
        echo "<script>alert('¡Hoja de Ruta generada!');</script>";
    } else {
        echo "<script>Swal.fire({
            icon: 'error',
            title: 'Error!',
            text: '¡Error al reenviar la Solicitud de Servicio!' 
        })</script>";
    }     

    $items1 = ($_POST['numeroHr']);
    $items2 = ($_POST['descripcion']);
    $items3 = ($_POST['origen']);
    $items4 = ($_POST['destino']);
        while(true) {
            $item1 = current($items1);
            $item2 = current($items2);
            $item3 = current($items3);
            $item4 = current($items4);

            $id_s=(( $item1 !== false) ? $item1 : ", &nbsp;");
            $carac=(( $item2 !== false) ? $item2 : ", &nbsp;");
            $tiempo=(( $item3 !== false) ? $item3 : ", &nbsp;");
            $precio=(( $item4 !== false) ? $item4 : ", &nbsp;");
            $sql ="UPDATE hojaruta SET Descripcion='$carac',Origen='$tiempo',Destino='$precio'   WHERE NumeroHojaRuta = $id_s";
            $sqlRes=mysqli_query($conexion,$sql);

            $item1 = next( $items1 );
            $item2 = next( $items2 );
            $item3 = next( $items3 );
            $item4 = next( $items4 );
                  if($item1 === false && $item2 === false && $item3 === false && $item4 === false) break;
        }
}
?>