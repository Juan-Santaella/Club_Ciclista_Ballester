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
    <!-- <meta name="viewport" content="> -->
    <meta name="author" content="Juan Santaella">
    <title> Club Ciclista Ballester </title>

    <!--Icono en el title-->
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">

    <script src="https://kit.fontawesome.com/4e2bb02eb5.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/style.css">    <!--*** LOS ESTILOS SIEMPRE VAN DESPUÉS DE LOS ICONOS ***-->

    <!--meta etiqueta que va a convertir a la página en RESPONSIVE-->
    <meta name="viewport" content= initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0>

</head>
<body>

    <!-- Header - menu -->
    <header>

        <!--SocialBar superior-->
        <?php
            include "../includes/social_up_assets.php";
        ?>

        <div class="header-content">
            
            <!--Nav-->
            <div class="logo">
                <h1>Club Ciclista <b>Ballester</b></h1>
            </div>

            <div class="menu" id="show-menu">
                <nav>
                    <ul>
                        <li><a href="../index.php"><i class="fas fa-home"></i> Inicio</a></li>
                        <li><a href="bienvenida_usr.php"><i class="fas fa-lock"></i> Área Usuarios</a></li>
                        <li class="menu-selected"><a href="visor_excel_1.php" class="text-menu-selected"><i class="fas fa-images"></i> Notas - Anuncios</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        
        <!--Icono hamburguesa del menú responsive-->
        <div id="icon-menu">
            <i class="fas fa-bars"></i>
        </div>

    </header>
    
    <!-- Contenodor principal -->

    <div class="container-all" id="move-content">

    <!--Enunciado-->

    <div class="enunciado-anuncios">
        <h2>Notas y <b>Anuncios</b></h2>
        <h4>Puedes mandarnos tu nota o anuncio al correo <b>info@clubcballester.es</b> , adjuntando opcionalmente fotografías</h4>
    </div>
    
    <!--Posts de notas y anuncios-->

    <!--Contenedor-->
    <div class="container_advs">

        <!--Tarjeta 1-->
        <div class="card_advs">
            <img src="../img/usr/advs/DSC_2415.jpg">
            <h4><span>Resultados</span> Generales Temporada 2021</h4>
            <p>Resultados de las pruebas celebradas</p>
            <a href="#">Leer más</a>
        </div>

        <!--Tarjeta 2-->
        <div class="card_advs">
            <img src="../img/usr/advs/DSC_9155.jpg">
            <h4>Resultados finales <span>Liga Acentejo 2021</span></h4>
            <p>Resultados finales Liga Acentejo 2021</p>
            <a href="#">Leer más</a>
        </div>

        <!--Tarjeta 3-->
        <div class="card_advs">
            <img src="../img/usr/advs/DSC_9286.jpg">
            <h4>Resultados 5ª Prueba <span>Liga Acentejo 2021</span></h4>
            <p>Clasificaciones en las distintas categorías</p>
            <a href="#">Leer más</a>
        </div>

        <!--Tarjeta 4-->
        <div class="card_advs">
            <img src="../img/usr/advs/DSC_2674.jpg">
            <h4>5ª Prueba <span>Liga MTB de Candelaria 2021</span></h4>
            <p>Resultados de la última prueba de la Liga</p>
            <a href="#">Leer más</a>
        </div>

        <!--Tarjeta 5-->
        <div class="card_advs">
            <img src="../img/usr/advs/DSC_1739.jpg">
            <h4>Curso de <span>Primeros Auxilios</span></h4>
            <p>Curso impartido en exclusiva para los integrantes del Club</p>
            <a href="#">Leer más</a>
        </div>

        <!--Tarjeta 6-->
        <div class="card_advs">
            <img src="../img/usr/advs/pretemporada.jpg">
            <h4>Pruebas <span>Pretemporada 2022</span></h4>
            <p>Relación de pruebas a celebrar, previas a la competición oficial</p>
            <a href="#">Leer más</a>
        </div>

        <!--Tarjeta 7-->
        <div class="card_advs">
            <img src="../img/usr/advs/DSC_3296.jpg">
            <h4>¡Feliz <span>Navidad 2021</span></h4>
            <p>La familia que integra el Club les desea ¡FELIZ NAVIDAD 2021!</p>
            <a href="#">Leer más</a>
        </div>

        <!--Tarjeta 8-->
        <div class="card_advs">
            <img src="../img/usr/advs/calendario.jpg">
            <h4><span>Calendario</span> de pruebas 2022</h4>
            <p>Calendario Oficial de pruebas a celebrar en la temporada 2022</p>
            <a href="#">Leer más</a>
        </div>

    </div>


    <!--Incrustamos el código del botón de scroll_up-->
    <?php
        include "../includes/scroll_button.php";
    ?>

    <!-- Incrustamos el código del footer-->
    <?php
        include "../includes/footer_assets.php";
    ?>

    <!--Enlace a los scripts de JavaScript-->
    <script src="../js/script.js"></script>

</body>
</html>