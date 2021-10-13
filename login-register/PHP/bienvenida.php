<?php
    //Iniciamos sesión
    session_start();

    //Si no se ha iniciado sesión, al entrar en el archivo directamente por la URL
    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Iniciar sesión, por favor");
                window.location="../index.php";
            </script>
        ';
       
        //Detenemos aquí el código y destruimos la sesión
        session_destroy();
        die();
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Juan Santaella">
    <title>Área Privada - Club Ballester</title>
</head>
<body>
    <h1>Bienvenido al Club Ciclista Ballester</h1>
    <a href="cerrar_sesion.php">Cerrar sesión</a>
</body>
</html>