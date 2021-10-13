<?php

    include 'conexion_bd.php';

    $num_socio=$_POST["numero_socio"];
    $usuario=$_POST["usuario"];
    $pwd=$_POST["contrasena"];
    //Almacenamos la contraseña encriptada
    $pwd=hash('sha512',$pwd);
    $nombre=$_POST["nombre"];
    $apellidos=$_POST["apellidos"];
    $email=$_POST["correo_elec"];
    $telefono=$_POST["telefono"];

    //Guardamos los datos de las variables, recibidos del formulario, en la BD
    $query="INSERT INTO socios(NUMERO_SOCIO,USUARIO,CONTRASENA,NOMBRE,APELLIDOS,CORREO_ELEC,TELEFONO) VALUES('$num_socio','$usuario','$pwd','$nombre','$apellidos','$email','$telefono')";

    
    /**** Verificar que el NÚMERO DE SOCIO no se repita en la BD ****/
    $verificar_num_socio=mysqli_query($conexion,"SELECT * FROM socios WHERE NUMERO_SOCIO='$num_socio'");

    //Si encontramos el registro buscado, por lo que existe una duplicidad de datos de registro
    if(mysqli_num_rows($verificar_num_socio)>0){
        echo '<script>
                alert("Error, el número de socio YA EXISTE, inténtalo de nuevo");
                window.location="../index.php";
             </script>';

             /**** CERRAMOS LA CONEXIÓN CON LA BD ****/
             mysqli_close($conexion);

             exit();    //Al llegar a este punto, EL CÓDIGO QUE ESTÁ MÁS ABAJO NO SE EJECUTA, SALIÉNDOSE DEL SCRIPT
    }

    /**** Verificar que el USUARIO no se repita en la BD ****/
    $verificar_usuario=mysqli_query($conexion,"SELECT * FROM socios WHERE USUARIO='$usuario'");

    //Si encontramos el registro buscado, por lo que existe una duplicidad de datos de registro
    if(mysqli_num_rows($verificar_usuario)>0){
        echo '<script>
                alert("Error, el socio YA EXISTE, inténtalo de nuevo");
                window.location="../index.php";
             </script>';

             /**** CERRAMOS LA CONEXIÓN CON LA BD ****/
             mysqli_close($conexion);

             exit();    //Al llegar a este punto, EL CÓDIGO QUE ESTÁ MÁS ABAJO NO SE EJECUTA, SALIÉNDOSE DEL SCRIPT   
    }

    /**** SI TODO ESTÁ CORRECTO, SE INSERTAN LOS CAMPOS EN LA TABLA DE LA BD ****/

    $ejecutar=mysqli_query($conexion,$query);

    /**** SI LA OPERACIÓN DE REGISTRO SE EJECUTA CORRECTAMENTE ****/
    if($ejecutar){
        echo '<script>
                alert("Socio almacenado correctamente");
                window.location="../index.php";
             </script>';
    }else{
        echo '<script>
                alert("Error, inténtalo de nuevo");
                window.location="../index.php";
             </script>';
    }

    /**** CERRAMOS LA CONEXIÓN CON LA BD ****/
    mysqli_close($conexion);

?>  