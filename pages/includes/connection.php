<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'mydb';

        $conexion = mysqli_connect($server,$username,$password,$database); 
		
		if(!$conexion){
			echo "Error en la conexión";
		}
?>