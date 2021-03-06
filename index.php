<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="> -->
    <meta name="Description" content="Club Ciclista Ballester">
    <meta name="Keywords" content="Club Ciclista Ballester, escuela de ciclismo en Tenerife, mountainbike, ciclismo, Tenerife, escuela de mountainbike, ciclismo de carretera, escuela de mountainbike en Tenerife, ciclismo de carretera en Tenerife, ciclismo en Candelaria, escuela de ciclismo de Candelaria, circuito de Punta Larga, Punta Larga, MTB, ciclismo en Tenerife">
    <meta name="author" content="Juan Santaella">
    <title> Club Ciclista Ballester </title>

    <!--Icono en el title-->
    <link rel="shortcut icon" href="img/logo.jpg" type="image/x-icon">

    <script src="https://kit.fontawesome.com/4e2bb02eb5.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css">    <!--*** LOS ESTILOS SIEMPRE VAN DESPUÉS DE LOS ICONOS ***-->

    <!--meta etiqueta que va a convertir a la página en RESPONSIVE-->
    <meta name="viewport" content= initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

</head>
<body>

    <!-- Header - menu -->
    <header>

        <!--SocialBar superior y ventana modal de Página en Construcción-->
        <?php
            include "includes/social_up.php";
        ?>

        <!-- Tambíen se puede utilizar -->
        <?php //require("includes/social_up.php") ?>

        <div class="header-content">
            
            <!--Nav-->
            <div class="logo">
                <h1>Club Ciclista <b>Ballester</b></h1>
            </div>

            <div class="menu" id="show-menu">
                <nav>
                    <ul>
                        <li class="menu-selected"><a href="index.php" class="text-menu-selected"><i class="fas fa-home"></i> Inicio</a></li>
                        <li><a href="assets/club.php"><i class="fas fa-biking"></i> Club</a></li>
                        <li><a href="assets/escuela.php"><i class="fas fa-chalkboard-teacher"></i> Escuela</a></li>
                        <li><a href="assets/galeria.php"><i class="fas fa-images"></i> Galería</a></li>
                        <li><a href="assets/contacto.php"><i class="fas fa-envelope"></i> Contáctanos</a></li>
                        <li><a href="assets/login-reg.php"><i class="fas fa-lock"></i> Entrar</a></li>
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

    <!-------------------------  SLIDESHOW  --------------------------->

    <div class="slideshow">

        <!--Slide 1-->
        <div class="slideshow-item">
            <img src="img/DSC_8181.jpg" alt="Club Ballester posando">
            <div class="slideshow-item-text">
                <h5>Club Ciclista <span>Ballester</span></h5>
                <p>Bienvenidos a la Web del Club Ciclista Ballester</p>
            </div>
        </div>

        <!--Slide 2-->
        <div class="slideshow-item">
            <img src="img/DSC_7259.jpg" alt="Circuito Punta Larga">
            <div class="slideshow-item-text">
                <h5><span>Circuito</span> de MTB de Punta Larga, Candelaria</h5>
                <p>Contamos con unas completas instalaciones</p>
            </div>
        </div>

        <!--Slide 3-->
        <div class="slideshow-item">
            <img src="img/DSC_9662.jpg" alt="Club Ballester posando">
            <div class="slideshow-item-text">
                <h5><span>Escuela</span> de Ciclismo</h5>
                <p>Donde formamos en técnica y valores a los futuros deportistas</p>
            </div>
        </div>

    </div>

    <!-- Publicaciones Responsivas (Noticias) -->

    <section class="post-list">
        <div class="content">

            <!--Post 1-->
            <article class="post">
                <div class="post-header">
                    <div class="post-img-1"></div>
                </div>
                <div class="post-body">
                    <span>14 septiembre, 2021</span>
                    <h2>Gran resultado Liga Acentejo</h2>
                    <p class="descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, cum facere unde voluptatem culpa praesentium.</p>
                    <a href="assets/maintenance/maintenance_inicio.php" class="post-link">Leer más...</a>
                </div>
            </article>

            <!--Post 2-->
            <article class="post">
                <div class="post-header">
                    <div class="post-img-2"></div>
                </div>
                <div class="post-body">
                    <span>1 septiembre, 2021</span>
                    <h2>Próximas competiciones</h2>
                    <p class="descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. At consequuntur sint natus exercitationem aliquid doloribus!</p>
                    <a href="assets/maintenance/maintenance_inicio.php" class="post-link">Leer más...</a>
                </div>
            </article>

            <!--Post 3-->
            <article class="post">
                <div class="post-header">
                    <div class="post-img-3"></div>
                </div>
                <div class="post-body">
                    <span>28 agosto, 2021</span></br>
                    <h2>Protocolo COVID-19</h2>
                    <p class="descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro praesentium optio nisi adipisci quo non.</p>
                    <a href="assets/maintenance/maintenance_inicio.php" class="post-link">Leer más...</a>
                </div>
            </article>
        </div>
    </section>

    <!-- Imágenes equipación del Club -->

    <div class="container-equipacion">
        <div class="foto-equipacion">
            <img src="img/maillot_corto_ballester.jpeg" alt="maillot corto Ballester">
            <img src="img/maillot_largo_ballester.jpeg" alt="maillot largo Ballester">
            <img src="img/chaquetilla_ballester.jpeg" alt="chaquetilla Ballester">
        </div>
    </div>

    <!-- Posts de Facebook  -->

    <div class="container-social">
        <div class="container-facebook">

            <!--Post 1-->
            <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fclubciclistaballester.azucareraespanola%2Fposts%2F1873937332813049&show_text=true&width=500" width="500" height="659" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
           
            <!--Post 2-->
            <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fclubciclistaballester.azucareraespanola%2Fposts%2F1859192307620885&show_text=true&width=500" width="500" height="743" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>

        </div>
    
        <!-- Posts de Instagram  -->

        <div class="container-instagram">

            <!--Post 1-->
            <iframe width="320" height="561" src="https://www.instagram.com/p/CUQiTALIJTq/embed" frameborder="0"></iframe>

            <!--Post 2-->
            <iframe width="320" height="561" src="https://www.instagram.com/p/CWB-6HfIv_9/embed" frameborder="0"></iframe>

            <!--Post 3-->
            <iframe width="320" height="561" src="https://www.instagram.com/p/CUvVG2sIUv_/embed" frameborder="0"></iframe>

        </div>
    </div>

    <!-- Videos de YouTube -->

    <!--Contenedor-->
    <div class="container">

        <!--Tarjeta 1-->
        <div class="card">
            <iframe src="https://www.youtube.com/embed/f7pLXrH6yJs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h4>Circuito de MTB</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, at quibusdam!</p>
        </div>

        <!--Tarjeta 2-->
        <div class="card">
            <iframe src="https://www.youtube.com/embed/RgyYkH8EFAw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;   clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h4>Club C. Ballester 2019</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, at quibusdam!</p>
        </div>

        <!--Tarjeta 3-->
        <div class="card">
            <iframe src="https://www.youtube.com/embed/L56CYYguaEw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;   clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h4>Escuela de Ciclismo</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, at quibusdam!</p>
        </div>

    </div>

    <!-- Carteles de pruebas y anuncios -->

    <div class="container-carteles">
        <img src="img/carteles/loro_parque.jpg" alt="prueba Loro Parque">
        <img src="img/carteles/liga_infantil_ptl.jpg" alt="liga infantil Punta Larga">
        <img src="img/carteles/tour.jpg" alt="tour 2022">
    </div>

    <!-- Sponsors -->

    <div class="container-sponsors">
        <div class="img-sponsors">
            <a href="https://www.candelaria.es" target="_blank"><img id="grow1" src="img/sponsors/ayto_candelaria.jpg" alt="Ayuntamiento Candelaria"></a>
            <a href="https://deportestenerife.es" target="_blank"><img id="grow3" src="img/sponsors/dxt.png" alt="Cabildo Tenerife"></a>
            <a href="https://ciclismocanario.es › index.php › canarias" target="_blank"><img src="img/sponsors/fed_canaria.png" alt="Federacion Ciclismo"></a>
            <a href="https://aguasdefirgas.com" target="_blank"><img src="img/sponsors/firgas.png" alt="Firgas"></a>
            <a href="https://libbys.es" target="_blank"><img id="grow3" src="img/sponsors/libbys.png" alt="Libby´s"></a>
            <a href="https://dulcesol.com" target="_blank"><img id="grow3" src="img/sponsors/dulcesol.png" alt="Dulcesol"></a>
        </div>

        <div class="img-sponsors">
            <a href="https://www.facebook.com/aperitivoscumba/" target="_blank"><img src="img/sponsors/cumba.png" alt="Cumba"></a>
            <a href="https://www.instagram.com/construccionesmetrika/" target="_blank"><img src="img/sponsors/metrika.png" alt="Metrika"></a>
            <a href="https://www.facebook.com/ReactiviteCentroDeFisioterapia/" target="_blank"><img id="grow2" src="img/sponsors/reactivite.png" alt="Réactivité"></a>
            <a href="https://www.elpaso2000.com" target="_blank"><img src="img/sponsors/paso2000.png" alt="Paso2000"></a>
            <a href="https://www.archipielagoeventos.es" target="_blank"><img src="img/sponsors/archipielago.png" alt="Archipiélago"></a>
        </div>
    </div>

    <!--Incrustamos el código del botón de scroll_up-->
    <?php
        include "includes/scroll_button.php";
    ?>

    <!-- Incrustamos el código del footer-->
    <?php
        include "includes/footer.php";
    ?>
    </div>

    <!--Enlace a los scripts de JavaScript-->
    <script src="js/script.js"></script>

</body>
</html>