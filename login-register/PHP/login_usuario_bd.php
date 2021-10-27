<?php

    /**** INICIALIZAMOS LA SESIÓN ****/
    session_start();

    include'conexion_bd.php';

    $usuario=htmlspecialchars($_POST['usuario']);
    $pwd=htmlspecialchars($_POST['contrasena']);

    //Verificamos el valor de la contraseña encriptada para su búsqueda en la BD
    $pwd=hash('sha512',$pwd);
    
    /**** VALIDAMOS QUE LOS CREDENCIALES EXISTEN EN LA BD ****/
    $validar_login=mysqli_query($conexion,"SELECT * FROM socios WHERE usuario='$usuario' AND contrasena='$pwd'");

    /**** SI LOS CREDENCIALES INTRODUCIDOS SE ENCUENTRAN EN LA BD ****/

    if(mysqli_num_rows($validar_login) > 0){

        //Guardamos el contenido del campo ROL_USER de la BD en una variable
        $rol_user= mysqli_query($conexion,"SELECT ROL_USER FROM socios WHERE usuario='$usuario' AND contrasena='$pwd'");

        if (mysqli_num_rows($rol_user) > 0) {    //Si existe un registro al menos como respuesta a la consulta SQL

            while($row = mysqli_fetch_assoc($rol_user)) {       //Guardamos el resultado de la consulta con sus campos en un array asociativo

                //Verificamos el contenido del elemento del array asociativo, preguntando por el rol que contiene, asignado al usuario que se logea
                if($row["ROL_USER"]=="administrador"){

                    //Almacenamos los valores de inicio de sesión del usuario
                    $_SESSION['usuario']=$usuario;
                    $_SESSION['contrasena']=$pwd;
                    header("location: ../../admin/bienvenida_adm.php");
                    exit();

                }else{

                    //Almacenamos los valores de inicio de sesión del usuario
                    $_SESSION['usuario']=$usuario;
                    $_SESSION['contrasena']=$pwd;
                    header("location: ../../users/bienvenida_usr.php");
                    exit();
                }
            }
        }

    }else{
        echo '
            <script>
                alert("Usuario no existe, por favor verifique los datos introducidos");
                window.location="../../login-reg.php";
            </script>';
        exit();
    }
?>