<?php
    /**** CERRAMOS SESIÓN Y ABRIMOS LA PÁGINA PRINCIPAL DE LOGIN-REGISTER ****/
    session_start();
    session_destroy();
    header("location:../../index.php");
?>