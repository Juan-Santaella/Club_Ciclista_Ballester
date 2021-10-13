<?php

    /**** INICIALIZAMOS LA SESIÓN ****/
    session_start();

    include'conexion_bd.php';

    $usuario=$_POST['usuario'];
    $pwd=$_POST['contrasena'];
    //Guardamos el valor de la contraseña encriptada para su búsqueda en la BD
    $pwd=hash('sha512',$pwd);

    /**** VALIDAMOS QUE LOS CREDENCIALES EXISTEN EN LA BD ****/
    $validar_login=mysqli_query($conexion,"SELECT * FROM socios WHERE usuario='$usuario' AND contrasena='$pwd'");

    /**** SI LOS CREDENCIALES INTRODUCIDOS SE ENCUENTRAN EN LA BD ****/
    if(mysqli_num_rows($validar_login)>0){

        //Almacenamos los valores de inicio de sesión del usuario
        $_SESSION['usuario']=$usuario;
        header("location: bienvenida.php");
        exit();
    }else{
        echo '
            <script>
                alert("Usuario no existe, por favor verifique los datos introducidos");
                window.location="../index.php";
            </script>';
        exit();
    }





?>