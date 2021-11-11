<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Juan Santaella">
    <title> Club Ciclista Ballester </title>

    <!--Icono en el title-->
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

    <script src="https://kit.fontawesome.com/4e2bb02eb5.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css">    <!--*** LOS ESTILOS SIEMPRE VAN DESPUÉS DE LOS ICONOS ***-->

    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!--meta etiqueta que va a convertir a la página en RESPONSIVE-->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

</head>
<body>

    <!-- Header - menu -->
    <header>

        <!--SocialBar superior-->
        <?php
            include "includes/social_up.php";
        ?>

        <div class="header-content">
            
            <!--Nav-->
            <div class="logo">
                <h1>Club Ciclista <b>Ballester</b></h1>
            </div>

            <div class="menu" id="show-menu">
                <nav>
                    <ul>
                        <li><a href="index.php"><i class="fas fa-home"></i> Inicio</a></li>
                        <li><a href="club.php"><i class="fas fa-biking"></i> Club</a></li>
                        <li><a href="escuela.php"><i class="fas fa-chalkboard-teacher"></i> Escuela</a></li>
                        <li class="menu-selected"><a href="galeria.pnp" class="text-menu-selected"><i class="fas fa-images"></i> Galería</a></li>
                        <li><a href="contacto.php"><i class="fas fa-envelope"></i> Contáctanos</a></li>
                        <li><a href="login-reg.php"><i class="fas fa-lock"></i> Entrar</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        
        <!--Icono hamburguesa del menú responsive-->
        <div id="icon-menu">
            <i class="fas fa-bars"></i>
        </div>

    </header>
    
    <!-- Portada -->

    <div class="container-all" id="move-content">

    <div class="container-cover-galeria">
        <div class="container-info-cover">
            <h1> Galería </h1>  
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus quae ducimus mollitia velit beatae nesciunt!</p>
        </div>
    </div>

    <!-- ************* Enunciado galería de imágenes **************** -->

    <div class="enunciado">
        <h2>Galería de <b>Imágenes</b></h2>
    </div>


    <!--Galería de imágenes con Lightbox-->
    <section class="galeria">
        <a href="#image1"><img src="img/DSC_9130.jpg" alt=""></a>
        <a href="#image2"><img src="img/DSC_9147.jpg" alt=""></a>
        <a href="#image3"><img src="img/DSC_9162.jpg" alt=""></a>
        <a href="#image4"><img src="img/DSC_9349.jpg" alt=""></a>
        <a href="#image5"><img src="img/DSC_9662.jpg" alt=""></a>
        <a href="#image6"><img src="img/DSC_9751.jpg" alt=""></a>
        <a href="#image7"><img src="img/DSC_7372.jpg" alt=""></a>
        <a href="#image8"><img src="img/DSC_7259.jpg" alt=""></a>
        <a href="#image9"><img src="img/DSC_7264.jpg" alt=""></a>
        <a href="#image10"><img src="img/DSC_8181.jpg" alt=""></a>
    </section>
    <!--Configuramos el light-box para cada imagen-->
    <article class="light-box" id="image1">
        <a href="#image10" class="next"><i class="fas fa-arrow-left"></i></a>
        <img src="img/DSC_9130.jpg" alt="">
        <a href="#image2" class="next"><i class="fas fa-arrow-right"></i></a>
        <a href="#" class="close">X</a>
    </article>
    <article class="light-box" id="image2">
        <a href="#image1" class="next"><i class="fas fa-arrow-left"></i></a>
        <img src="img/DSC_9147.jpg" alt="">
        <a href="#image3" class="next"><i class="fas fa-arrow-right"></i></a>
        <a href="#" class="close">X</a>
    </article>
    <article class="light-box" id="image3">
        <a href="#image2" class="next"><i class="fas fa-arrow-left"></i></a>
        <img src="img/DSC_9162.jpg" alt="">
        <a href="#image4" class="next"><i class="fas fa-arrow-right"></i></a>
        <a href="#" class="close">X</a>
    </article>
    <article class="light-box" id="image4">
        <a href="#image3" class="next"><i class="fas fa-arrow-left"></i></a>
        <img src="img/DSC_9349.jpg" alt="">
        <a href="#image5" class="next"><i class="fas fa-arrow-right"></i></a>
        <a href="#" class="close">X</a>
    </article>
    <article class="light-box" id="image5">
        <a href="#image4" class="next"><i class="fas fa-arrow-left"></i></a>
        <img src="img/DSC_9662.jpg" alt="">
        <a href="#image6" class="next"><i class="fas fa-arrow-right"></i></a>
        <a href="#" class="close">X</a>
    </article>
    <article class="light-box" id="image6">
        <a href="#image5" class="next"><i class="fas fa-arrow-left"></i></a>
        <img src="img/DSC_9751.jpg" alt="">
        <a href="#image7" class="next"><i class="fas fa-arrow-right"></i></a>
        <a href="#" class="close">X</a>
    </article>
    <article class="light-box" id="image7">
        <a href="#image6" class="next"><i class="fas fa-arrow-left"></i></a>
        <img src="img/DSC_7372.jpg" alt="">
        <a href="#image8" class="next"><i class="fas fa-arrow-right"></i></a>
        <a href="#" class="close">X</a>
    </article>
    <article class="light-box" id="image8">
        <a href="#image7" class="next"><i class="fas fa-arrow-left"></i></a>
        <img src="img/DSC_7259.jpg" alt="">
        <a href="#image9" class="next"><i class="fas fa-arrow-right"></i></a>
        <a href="#" class="close">X</a>
    </article>
    <article class="light-box" id="image9">
        <a href="#image8" class="next"><i class="fas fa-arrow-left"></i></a>
        <img src="img/DSC_7264.jpg" alt="">
        <a href="#image10" class="next"><i class="fas fa-arrow-right"></i></a>
        <a href="#" class="close">X</a>
    </article>
    <article class="light-box" id="image10">
        <a href="#image9" class="next"><i class="fas fa-arrow-left"></i></a>
        <img src="img/DSC_8181.jpg" alt="">
        <a href="#image1" class="next"><i class="fas fa-arrow-right"></i></a>
        <a href="#" class="close">X</a>
    </article>

    <!-- ************* Enunciado galería de vídeos **************** -->

    <div class="enunciado">
        <h2>Galería de <b>Vídeos</b></h2>
    </div>

    <!--  GALERÍA DE VÍDEOS DE YOUTUBE  -->

    <!--Galería de imágenes con Lightbox-->
    <section class="galeria">
        
        <!--Primer vídeo-->
        <iframe src="https://www.youtube.com/embed/f7pLXrH6yJs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write;encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <!--Segundo vídeo-->
        <iframe src="https://www.youtube.com/embed/RgyYkH8EFAw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;   clipboard-write;encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

         <!--Tercer vídeo-->
        <iframe src="https://www.youtube.com/embed/L56CYYguaEw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;   clipboard-writeencrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

         <!--Cuarto vídeo-->
        <iframe src="https://www.youtube.com/embed/f7pLXrH6yJs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-writeencrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

         <!--Quinto vídeo-->
        <iframe src="https://www.youtube.com/embed/RgyYkH8EFAw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;   clipboard-write;encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

         <!--Sexto vídeo-->
        <iframe src="https://www.youtube.com/embed/L56CYYguaEw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;   clipboard-writeencrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

         <!--Septimo vídeo-->
        <iframe src="https://www.youtube.com/embed/f7pLXrH6yJs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-writeencrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

         <!--Octavo vídeo-->
        <iframe src="https://www.youtube.com/embed/RgyYkH8EFAw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;   clipboard-write;encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

         <!--Noveno vídeo-->
        <iframe src="https://www.youtube.com/embed/L56CYYguaEw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;   clipboard-writeencrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <!--Décimo vídeo-->
        <iframe src="https://www.youtube.com/embed/f7pLXrH6yJs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write;encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </section>

    <!--Configuramos los cuadros contenedores-->
    <article class="light-box">
        <a href="#image10" class="next"><i class="fas fa-arrow-left"></i></a>
        <img src="img/DSC_9130.jpg" alt="">
        <a href="#image2" class="next"><i class="fas fa-arrow-right"></i></a>
        <a href="#" class="close">X</a>
    </article>
    <article class="light-box" id="video2">
        <a href="#image1" class="next"><i class="fas fa-arrow-left"></i></a>
        <img src="img/DSC_9147.jpg" alt="">
        <a href="#image3" class="next"><i class="fas fa-arrow-right"></i></a>
        <a href="#" class="close">X</a>
    </article>
    <article class="light-box" id="video3">
        <a href="#image2" class="next"><i class="fas fa-arrow-left"></i></a>
        <img src="img/DSC_9162.jpg" alt="">
        <a href="#image4" class="next"><i class="fas fa-arrow-right"></i></a>
        <a href="#" class="close">X</a>
    </article>
    <article class="light-box" id="video4">
        <a href="#image3" class="next"><i class="fas fa-arrow-left"></i></a>
        <img src="img/DSC_9349.jpg" alt="">
        <a href="#image5" class="next"><i class="fas fa-arrow-right"></i></a>
        <a href="#" class="close">X</a>
    </article>
    <article class="light-box" id="video5">
        <a href="#image4" class="next"><i class="fas fa-arrow-left"></i></a>
        <img src="img/DSC_9662.jpg" alt="">
        <a href="#image6" class="next"><i class="fas fa-arrow-right"></i></a>
        <a href="#" class="close">X</a>
    </article>
    <article class="light-box" id="video6">
        <a href="#image5" class="next"><i class="fas fa-arrow-left"></i></a>
        <img src="img/DSC_9751.jpg" alt="">
        <a href="#image7" class="next"><i class="fas fa-arrow-right"></i></a>
        <a href="#" class="close">X</a>
    </article>
    <article class="light-box" id="video7">
        <a href="#image6" class="next"><i class="fas fa-arrow-left"></i></a>
        <img src="img/DSC_5235.jpg" alt="">
        <a href="#image8" class="next"><i class="fas fa-arrow-right"></i></a>
        <a href="#" class="close">X</a>
    </article>
    <article class="light-box" id="video8">
        <a href="#image7" class="next"><i class="fas fa-arrow-left"></i></a>
        <img src="img/DSC_7259.jpg" alt="">
        <a href="#image9" class="next"><i class="fas fa-arrow-right"></i></a>
        <a href="#" class="close">X</a>
    </article>
    <article class="light-box" id="video9">
        <a href="#image8" class="next"><i class="fas fa-arrow-left"></i></a>
        <img src="img/DSC_7264.jpg" alt="">
        <a href="#image10" class="next"><i class="fas fa-arrow-right"></i></a>
        <a href="#" class="close">X</a>
    </article>
    <article class="light-box" id="video10">
        <a href="#image9" class="next"><i class="fas fa-arrow-left"></i></a>
        <img src="img/DSC_8181.jpg" alt="">
        <a href="#image1" class="next"><i class="fas fa-arrow-right"></i></a>
        <a href="#" class="close">X</a>
    </article>




    <!--Incrustamos el código del botón de scroll_up-->
    <?php
        include "includes/scroll_button.php"
    ?>
    <!-- Incrustamos el código del footer-->
    <?php
        include "includes/footer.php";
    ?>

    <!--Enlace a los scripts de JavaScript-->
    <script src="js/script.js"></script>
    <script src="https://kit.fontawesome.com/4e2bb02eb5.js" crossorigin="anonymous"></script>

</body>
</html>