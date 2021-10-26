<?php

    include 'conexion_bd.php';

    $num_socio=htmlspecialchars($_POST["numero_socio"]);
    $usuario=htmlspecialchars($_POST["usuario"]);
    $pwd=htmlspecialchars($_POST["contrasena"]);
    //Almacenamos la contraseña encriptada
    //$pwd=hash('sha512',$pwd);
    $nombre=htmlspecialchars($_POST["nombre"]);
    $apellidos=htmlspecialchars($_POST["apellidos"]);
    $email=htmlspecialchars($_POST["correo_elec"]);
    $telefono=htmlspecialchars($_POST["telefono"]);

    
    /**** Verificar que el SOCIO no se repita en la BD ****/
    $verificar_socio=mysqli_query($conexion,"SELECT * FROM socios WHERE usuario='$usuario' AND contrasena='$pwd'");

    //Si encontramos el registro buscado, por lo que existe una duplicidad de datos de registro
    if(mysqli_num_rows($verificar_socio)>0){
        echo '<script>
                alert("Error, el socio YA EXISTE, inténtalo de nuevo");
                window.location="../../login-reg.php";
             </script>';

             /**** CERRAMOS LA CONEXIÓN CON LA BD ****/
             mysqli_close($conexion);

             exit();    //Al llegar a este punto, EL CÓDIGO QUE ESTÁ MÁS ABAJO NO SE EJECUTA, SALIÉNDOSE DEL SCRIPT
    }

    /**** Verificar que el NÚMERO DE SOCIO no se repita en la BD ****/
    $verificar_num_socio=mysqli_query($conexion,"SELECT * FROM socios WHERE numero_socio='$num_socio'");
    //Si encontramos el registro buscado, por lo que existe una duplicidad de datos de registro
    if(mysqli_num_rows($verificar_num_socio)>0){
        echo '<script>
                alert("Error, el número de socio YA ESTÁ REGISTRADO, inténtalo de nuevo");
                window.location="../../login-reg.php";
             </script>';

             /**** CERRAMOS LA CONEXIÓN CON LA BD ****/
             mysqli_close($conexion);

             exit();    //Al llegar a este punto, EL CÓDIGO QUE ESTÁ MÁS ABAJO NO SE EJECUTA, SALIÉNDOSE DEL SCRIPT
    }


    /**** SI TODO ESTÁ CORRECTO, SE INSERTAN LOS CAMPOS EN LA TABLA DE LA BD ****/

    $query="INSERT INTO socios(NUMERO_SOCIO,USUARIO,CONTRASENA,NOMBRE,APELLIDOS,CORREO_ELEC,TELEFONO) VALUES('$num_socio','$usuario','$pwd','$nombre','$apellidos','$email','$telefono')";


    /**** SI LA OPERACIÓN DE REGISTRO SE EJECUTA CORRECTAMENTE ****/
    if(mysqli_query($conexion,$query)){
        echo '<script>
                alert("Socio almacenado correctamente");
                window.location="../../login-reg.php";
             </script>';
    }else{
        echo mysqli_error($conexion);
        echo '<script>
                alert("Error, inténtalo de nuevo");
                window.location="../../login-reg.php";
             </script>';
             
    }

    /**** CERRAMOS LA CONEXIÓN CON LA BD ****/
    mysqli_close($conexion);

?>  
