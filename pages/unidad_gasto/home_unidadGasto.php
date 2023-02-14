<?php 
session_start();
if(isset($_SESSION['id'])){
        $pagina = isset($_GET['p']) ? strtolower($_GET['p']) : 'inicio';
                require_once 'includes/header.php';  
                require_once 'pages_unidadGasto/'.$pagina.'.php'; 
                require_once 'includes/footer.php'; 
} else {
        header("location: index.php");
}    
?>