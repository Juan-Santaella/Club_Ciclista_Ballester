<?php
    /**** CERRAMOS SESIÓN Y ABRIMOS LA LANDING ****/
    session_start();
    session_destroy();
    header("location: ../index.php");
?>