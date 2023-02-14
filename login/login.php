<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../librerias/css/estilo_login.css">
</head>
<body class="text-center">
    <form action="controlador/connection_register.php" class="form-signin" method="post" novalidate>
        <h1 class="h3 mb-3 font-weight-normal">Iniciar sesión</h1>
        <input type="Usuario" id="Usuario" name="Usuario" class="form-control" placeholder="Nombre de Usuario" required autofocus>
        <div style="height: 20px;"></div>
        <input type="password" id="Contrasena" name="Contrasena" class="form-control" placeholder="Contraseña" required>
        <div style="height: 20px;"></div>
        <button name="ingresar" class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>    
    </form> 
</body>
</html>