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
                        <li><a href="bienvenida_adm.php"><i class="fas fa-lock"></i> Área Técnica</a></li>
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

    <!-- Línea 1 -->
    <div class="blog-body">
        <!--Post 1-->
        <div class="blog-post">
            <div class="blog-post__img">
                <img class="blog-img" src="../img/DSC_7372.jpg" alt="Ruedas de bicicletas">
            </div>
            <div class="blog-post__info">
                <div class="blog-post__date">
                    <span>Martes</span>
                    <span>23 Noviembre 2021</span>
                </div>
                <h1 class="blog-post__title">Liga MTB Puntalarga</h1>
                <p class="blog-post__text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero consequatur nihil totam maiores mollitia aliquid odit a sit vel ut? Temporibus consequuntur     expedita ipsum et.    
                </p>
                <a href="" class="blog-post__cta">Leer más</a>
            </div>
        </div>
        <!--Post 2-->
        <div class="blog-post">
            <div class="blog-post__img">
                <img class="blog-img" src="../img/DSC_7372.jpg" alt="Ruedas de bicicletas">
            </div>
            <div class="blog-post__info">
                <div class="blog-post__date">
                    <span>Martes</span>
                    <span>23 Noviembre 2021</span>
                </div>
                <h1 class="blog-post__title">Liga MTB Puntalarga</h1>
                <p class="blog-post__text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero consequatur nihil totam maiores mollitia aliquid odit a sit vel ut? Temporibus consequuntur     expedita ipsum et.    
                </p>
                <a href="" class="blog-post__cta">Leer más</a>
            </div>
        </div>
    </div>

    <!-- Línea 2 -->
    <div class="blog-body">

        <!--Post 1-->
        <div class="blog-post">
            <div class="blog-post__img">
                <img class="blog-img" src="../img/DSC_7372.jpg" alt="Ruedas de bicicletas">
            </div>

            <div class="blog-post__info">
                <div class="blog-post__date">
                    <span>Martes</span>
                    <span>23 Noviembre 2021</span>
                </div>
                <h1 class="blog-post__title">Liga MTB Puntalarga</h1>
                <p class="blog-post__text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero consequatur nihil totam maiores mollitia aliquid odit a sit vel ut? Temporibus consequuntur     expedita ipsum et.    
                </p>
                <a href="" class="blog-post__cta">Leer más</a>
            </div>
        </div>

        <!--Post 2-->
        <div class="blog-post">
            <div class="blog-post__img">
                <img class="blog-img" src="../img/DSC_7372.jpg" alt="Ruedas de bicicletas">
            </div>

            <div class="blog-post__info">
                <div class="blog-post__date">
                    <span>Martes</span>
                    <span>23 Noviembre 2021</span>
                </div>
                <h1 class="blog-post__title">Liga MTB Puntalarga</h1>
                <p class="blog-post__text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero consequatur nihil totam maiores mollitia aliquid odit a sit vel ut? Temporibus consequuntur     expedita ipsum et.    
                </p>
                <a href="" class="blog-post__cta">Leer más</a>
            </div>
        </div>
    </div>

    <!-- Línea 3 -->
    <div class="blog-body">

        <!--Post 1-->
        <div class="blog-post">
            <div class="blog-post__img">
                <img class="blog-img" src="../img/DSC_7372.jpg" alt="Ruedas de bicicletas">
            </div>

            <div class="blog-post__info">
                <div class="blog-post__date">
                    <span>Martes</span>
                    <span>23 Noviembre 2021</span>
                </div>
                <h1 class="blog-post__title">Liga MTB Puntalarga</h1>
                <p class="blog-post__text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero consequatur nihil totam maiores mollitia aliquid odit a sit vel ut? Temporibus consequuntur     expedita ipsum et.    
                </p>
                <a href="" class="blog-post__cta">Leer más</a>
            </div>
        </div>

        <!--Post 2-->
        <div class="blog-post">
            <div class="blog-post__img">
                <img class="blog-img" src="../img/DSC_7372.jpg" alt="Ruedas de bicicletas">
            </div>

            <div class="blog-post__info">
                <div class="blog-post__date">
                    <span>Martes</span>
                    <span>23 Noviembre 2021</span>
                </div>
                <h1 class="blog-post__title">Liga MTB Puntalarga</h1>
                <p class="blog-post__text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero consequatur nihil totam maiores mollitia aliquid odit a sit vel ut? Temporibus consequuntur     expedita ipsum et.    
                </p>
                <a href="" class="blog-post__cta">Leer más</a>
            </div>
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