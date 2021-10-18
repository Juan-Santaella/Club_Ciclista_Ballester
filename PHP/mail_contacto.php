<?php
    $nombre=$_POST["nombre"];
    $email=$_POST["email"];
    $telefono=$_POST["telefono"];
    $asunto=$_POST["asunto"];
    $mensaje=$_POST["mensaje"];

    $para="jsantaellamandillo@gmail.com";

    $cuerpo_mensaje="
        Nombre del remitente: ".$nombre."
        Correo: ".$email."
        Teléfono: ".$telefono."
        Mensaje: ".$mensaje."
    ";

    mail($para,$asunto,utf8_decode($mensaje));

    header("location: index.html");      //Nos redirige a la página principal
?>