<?php

    //Iniciamos sesión
    session_start();

    //Pasamos las variables globales recibidas del formulario a variables locales
    $num_socio=htmlspecialchars($_POST["numero_socio"]);
    $usuario=htmlspecialchars($_POST["usuario"]);
    $pwd=htmlspecialchars($_POST["contrasena"]);
    //Almacenamos la contraseña encriptada
    $pwd=hash('sha512',$pwd);
    $nombre=htmlspecialchars($_POST["nombre"]);
    $apellidos=htmlspecialchars($_POST["apellidos"]);
    $email=htmlspecialchars($_POST["correo_elec"]);
    $telefono=htmlspecialchars($_POST["telefono"]);

    include 'conexion_bd.php';

    /*$num_socio=$_POST["numero_socio"];
    $usuario=$_POST["usuario"];
    $pwd=$_POST["contrasena"];
    //Almacenamos la contraseña encriptada
    $pwd=hash('sha512',$pwd);
    $nombre=$_POST["nombre"];
    $apellidos=$_POST["apellidos"];
    $email=$_POST["correo_elec"];
    $telefono=$_POST["telefono"];*/


    //**************** Comprobamos que el usuario introducido no se encuentra ya registrado *****************//

    // sql para consultar una tabla (según tu BD)
    $sql = "SELECT usuario, contrasena FROM socios where usuario='$usuario' and contrasena='$pwd'";
    $resultado = mysqli_query($conexion, $sql);  
    
    //Si se encuentra un registro con la consulta SQL, mostramos un mensaje de error
    if (mysqli_num_rows($resultado) > 0) {

    
        /**** Verificar que el NÚMERO DE SOCIO no se repitan en la BD 
        $verificar_num_socio=mysqli_query($conexion,"SELECT * FROM socios WHERE NUMERO_SOCIO='$num_socio' AND CONTRASENA='$pwd'");*/

        //Si encontramos el registro buscado, por lo que existe una duplicidad de datos de registro
        if(mysqli_num_rows($verificar_num_socio)>0){
            echo '<script>
                    alert("Error, el socio YA EXISTE, inténtalo de nuevo");
                    window.location="../login-reg.php";
                  </script>';

             /**** CERRAMOS LA CONEXIÓN CON LA BD ****/
             mysqli_close($conexion);

             exit();    //Al llegar a este punto, EL CÓDIGO QUE ESTÁ MÁS ABAJO NO SE EJECUTA, SALIÉNDOSE DEL SCRIPT
        }

    /**** Verificar que el USUARIO no se repita en la BD 
    $verificar_usuario=mysqli_query($conexion,"SELECT * FROM socios WHERE USUARIO='$usuario'");*/

    /*Si encontramos el registro buscado, por lo que existe una duplicidad de datos de registro
    if(mysqli_num_rows($verificar_usuario)>0){
        echo '<script>
                alert("Error, el socio YA EXISTE, inténtalo de nuevo");
                window.location="../index.php";
             </script>';

             /**** CERRAMOS LA CONEXIÓN CON LA BD ****/
            /* mysqli_close($conexion);

             exit();    //Al llegar a este punto, EL CÓDIGO QUE ESTÁ MÁS ABAJO NO SE EJECUTA, SALIÉNDOSE DEL SCRIPT   
    }*/
    }

    /**** SI TODO ESTÁ CORRECTO, SE INSERTAN LOS CAMPOS EN LA TABLA DE LA BD ****/

    /*Guardamos los datos de las variables, recibidos del formulario, en la BD*/
    $query="INSERT INTO socios(NUMERO_SOCIO,USUARIO,CONTRASENA,NOMBRE,APELLIDOS,CORREO_ELEC,TELEFONO) VALUES('$num_socio','$usuario','$pwd','$nombre','$apellidos','$email','$telefono')";

    $ejecutar=mysqli_query($conexion,$query);

    /**** SI LA OPERACIÓN DE REGISTRO SE EJECUTA CORRECTAMENTE ****/
    if($ejecutar){
        echo '<script>
                alert("Socio almacenado correctamente");
                window.location="../../index.php";
             </script>';
    }else{
        echo '<script>
                alert("Error, inténtalo de nuevo");
                window.location="../../login-reg.php";
             </script>';
    }

    /**** CERRAMOS LA CONEXIÓN CON LA BD ****/
    mysqli_close($conexion);

?>  