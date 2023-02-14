<?php
include_once 'connection.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$asunto = (isset($_POST['asunto'])) ? $_POST['asunto'] : '';
$estado = (isset($_POST['estado'])) ? $_POST['estado'] : '';
$oficina = (isset($_POST['oficina'])) ? $_POST['oficina'] : '';
$fecha = (isset($_POST['fecha'])) ? $_POST['fecha'] : '';
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$num_hr = (isset($_POST['num_hr'])) ? $_POST['num_hr'] : '';

switch($opcion){
    case 2: 
        $consulta = "UPDATE oficina SET asunto='$asunto', estado='$estado', oficina='$oficina', fecha='$fecha' WHERE num_hr='$num_hr' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT num_hr, asunto, estado, oficina, fecha FROM oficina WHERE num_hr='$num_hr' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3:
        $consulta = "DELETE FROM oficina WHERE num_hr='$num_hr' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;        
}

print json_encode($data, JSON_UNESCAPED_UNICODE); 
$conexion = NULL;