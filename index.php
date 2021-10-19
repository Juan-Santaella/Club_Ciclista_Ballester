<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="> -->
    <meta name="author" content="Juan Santaella">
    <title> Club Ciclista Ballester </title>

    <!--Icono en el title-->
    <link rel="icon" type="image/png" href="img/logo.png">

    <script src="https://kit.fontawesome.com/4e2bb02eb5.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css">    <!--*** LOS ESTILOS SIEMPRE VAN DESPUÉS DE LOS ICONOS ***-->

    <!--meta etiqueta que va a convertir a la página en RESPONSIVE-->
    <meta name="viewport" content= initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

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
                        <li class="menu-selected"><a href="index.php" class="text-menu-selected"><i class="fas fa-home"></i> Inicio</a></li>
                        <li><a href="club.php"><i class="fas fa-biking"></i> Club</a></li>
                        <li><a href="escuela.php"><i class="fas fa-chalkboard-teacher"></i> Escuela</a></li>
                        <li><a href="#"><i class="fas fa-images"></i> Galería</a></li>
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
    
    <!-- Contenodor principal -->

    <div class="container-all" id="move-content">

    <!--Portada-->
    
    <!-- <div class="container-cover-inicio">
        <div class="container-info-cover">
            <h1>¡Pedalea con nosotros!</h1>  
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus quae ducimus mollitia velit beatae nesciunt!</p>
        </div>
    </div> -->


    <!-------------------------  SLIDESHOW  --------------------------->

    <div class="slideshow">

        <!--Slide 1-->
        <div class="slideshow-item">
            <img src="img/DSC_8181.jpg" alt="Club Ballester posando">
            <div class="slideshow-item-text">
                <h5>Club Ciclista Ballester</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad excepturi consequatur unde accusantium magnam alias! Praesentium, iusto, facere libero itaque commodi ipsam hic magni nemo temporibus molestiae laborum nam. Doloremque temporibus itaque velit voluptas! Nulla modi praesentium cumque vel aliquid?</p>
            </div>
        </div>

        <!--Slide 2-->
        <div class="slideshow-item">
            <img src="img/DSC_7259.jpg" alt="Circuito Punta Larga">
            <div class="slideshow-item-text">
                <h5>Circuito de MTB de Punta Larga, Candelaria</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad excepturi consequatur unde accusantium magnam alias! Praesentium, iusto, facere libero itaque commodi ipsam hic magni nemo temporibus molestiae laborum nam. Doloremque temporibus itaque velit voluptas! Nulla modi praesentium cumque vel aliquid?</p>
            </div>
        </div>

        <!--Slide 3-->
        <div class="slideshow-item">
            <img src="img/DSC_8266.jpg" alt="Club Ballester posando">
            <div class="slideshow-item-text">
                <h5>Club Ciclista Ballester</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad excepturi consequatur unde accusantium magnam alias! Praesentium, iusto, facere libero itaque commodi ipsam hic magni nemo temporibus molestiae laborum nam. Doloremque temporibus itaque velit voluptas! Nulla modi praesentium cumque vel aliquid?</p>
            </div>
        </div>

        <!--Slide 4-->
        <div class="slideshow-item">
            <img src="img/DSC_8266.jpg" alt="Club Ballester posando">
            <div class="slideshow-item-text">
                <h5>Club Ciclista Ballester</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad excepturi consequatur unde accusantium magnam alias! Praesentium, iusto, facere libero itaque commodi ipsam hic magni nemo temporibus molestiae laborum nam. Doloremque temporibus itaque velit voluptas! Nulla modi praesentium cumque vel aliquid?</p>
            </div>
        </div>

        <!--Slide 5-->
        <div class="slideshow-item">
            <img src="img/DSC_8266.jpg" alt="Club Ballester posando">
            <div class="slideshow-item-text">
                <h5>Club Ciclista Ballester</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad excepturi consequatur unde accusantium magnam alias! Praesentium, iusto, facere libero itaque commodi ipsam hic magni nemo temporibus molestiae laborum nam. Doloremque temporibus itaque velit voluptas! Nulla modi praesentium cumque vel aliquid?</p>
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
                    <a href="#" class="post-link">Leer más...</a>
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
                    <a href="#" class="post-link">Leer más...</a>
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
                    <a href="#" class="post-link">Leer más...</a>
                </div>
            </article>
        </div>
    </section>

    <!--Vídeos de YouTube-->

    <!--section class="post-list">
        <div class="content">

            Video 1
            <article class="post">
                <div class="post-header">
                    <iframe class="video" src="https://www.youtube.com/embed/RgyYkH8EFAw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;  clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="post-body">
                    <span>14 septiembre, 2021 | Diseño Web</span>
                    <h2>Tutorial HTML</h2>
                    <p class="descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam doloribus iure quae numquam inventore excepturi quas, aliquam exercitationem repellat, reprehenderit sit temporibus odio saepe cum.</p>
                    <a href="#" class="post-link">Leer más...</a>
                </div>
            </article>

            <!-Video 2
            <article class="post">
                <div class="post-header">
                    <iframe class="video" src="https://www.youtube.com/embed/RgyYkH8EFAw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;  clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="post-body">
                    <span>14 septiembre, 2021 | Diseño Web</span>
                    <h2>Tutorial HTML</h2>
                    <p class="descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam doloribus iure quae numquam inventore excepturi quas, aliquam exercitationem repellat, reprehenderit sit temporibus odio saepe cum.</p>
                    <a href="#" class="post-link">Leer más...</a>
                </div>
            </article>

            Video 3
            <article class="post">
                <div class="post-header">
                    <iframe class="video" src="https://www.youtube.com/embed/RgyYkH8EFAw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;  clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="post-body">
                    <span>14 septiembre, 2021 | Diseño Web</span>
                    <h2>Tutorial HTML</h2>
                    <p class="descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam doloribus iure quae numquam inventore excepturi quas, aliquam exercitationem repellat, reprehenderit sit temporibus odio saepe cum.</p>
                    <a href="#" class="post-link">Leer más...</a> 
                </div>
            </article>
        </div>
    </section>-->





    <!--Videos de YouTube-->

    <!--Contenedor-->
    <div class="container">

        <!--Tarjeta 1-->
        <div class="card">
            <iframe src="https://www.youtube.com/embed/f7pLXrH6yJs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <!-- <img src="img/DSC_5235.jpg"> -->
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

    <div class="div_espaciador">
            </br>
            </br>
            </br>
            </br>
    </div>

    </div>



    <!--Incrustamos el código del botón de scroll_up-->
    <?php
        include "includes/scroll_button.php"
    ?>

    <!-- Incrustamos el código del footer-->
    <?php
        include "includes/footer.php";
    ?>
    </div>

    <!--Enlace a los scripts de JavaScript-->
    <script src="js/script.js"></script>
    <script src="js/js-slider.js"></script>

</body>
</html>