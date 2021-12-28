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
                        <li class="menu-selected"><a href="bienvenida_adm.php" class="text-menu-selected"><i class="fas fa-home"></i> Área Técnica</a></li>
                        <li><a href="notas_anuncios.php"><i class="fas fa-biking"></i> Notas - Anuncios</a></li>
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
    
    <div class="container-cover-tecnica-inicio">
        <div class="container-info-cover">
            <h1>Área Técnica</h1>  
            <p>Zona privada de gestión técnica y administrativa del Club</p>
        </div>
    </div>

    <!-- Publicación de ficheros -->

    <div class="main-files">

        <!--Contenedor 1-->
        <div class="container-files">

            <!--Tarjeta 1-->
            <div class="card-files">
                <img src="../img/iconos/word.png">
                <p class="fecha-files">15 noviembre 2021</p>
                <h4>HTML - CSS</h4>
                <p>Introducción al diseño web</p>
                <a href="visor_word_1.php">Abrir</a>
                <a href="ficheros-adm/HTML, CSS 1.docx">Descargar</a>
            </div>

            <!--Tarjeta 2-->
            <div class="card-files">
                <img src="../img/iconos/excel.png">
                <p class="fecha-files">15 noviembre 2021</p>
                <h4>Auditoría de tiempos</h4>
                <p>Lista de la gestión de tareas</p>
                <a href="visor_excel_1.php">Abrir</a>
                <a href="ficheros-adm/AUDITORÍA DEL TIEMPO.xlsx">Descargar</a>
            </div>

            <!--Tarjeta 3-->
            <div class="card-files">
                <img src="../img/iconos/pdf.png">
                <p class="fecha-files">15 noviembre 2021</p>
                <h4>Algoritmos-Diagramas Flujo</h4>
                <p>Uso de algoritmos y diagramas de flujo</p>
                <a href="visor_pdf_1.php">Abrir</a>
                <a href="ficheros-adm/PHP_download/download_pdf1.php">Descargar</a>
            </div>

            <!--Tarjeta 4-->
            <div class="card-files">
                <img src="../img/iconos/word.png">
                <p class="fecha-files">15 noviembre 2021</p>
                <h4>SQL</h4>
                <p>Introducción a bases de datos SQL           </p>
                <a href="visor_word_2.php">Abrir</a>
                <a href="ficheros-adm/SQL.docx">Descargar</a>
            </div>

            <!--Tarjeta 5-->
            <div class="card-files">
                <img src="../img/iconos/pdf.png">
                <p class="fecha-files">15 noviembre 2021</p>
                <h4>Atajos VSC</h4>
                <p>Atajos de Visual Studio Code</p>
                <a href="visor_pdf_2.php">Abrir</a>
                <a href="ficheros-adm/PHP_download/download_pdf2.php">Descargar</a>
            </div>
        </div>

        <!--Contenedor 2-->
        <div class="container-files">

            <!--Tarjeta 1-->
            <div class="card-files">
                <img src="../img/iconos/pdf.png">
                <p class="fecha-files">15 noviembre 2021</p>
                <h4>Guía UF1</h4>
                <p>Guía Unidad Formativa 1 UF1</p>
                <a href="visor_pdf_3.php">Abrir</a>
                <a href="ficheros-adm/PHP_download/download_pdf3.php">Descargar</a>
            </div>

            <!--Tarjeta 2-->
            <div class="card-files">
                <img src="../img/iconos/word.png">
                <p class="fecha-files">15 noviembre 2021</p>
                <h4>HTML5</h4>
                <p>HTML5 y Lenguajes de Marcado</p>
                <a href="visor_word_3.php">Abrir</a>
                <a href="ficheros-adm/UA3 HTML5.docx">Descargar</a>
            </div>

            <!--Tarjeta 3-->
            <div class="card-files">
                <img src="../img/iconos/excel.png">
                <p class="fecha-files">15 noviembre 2021</p>
                <h4>Ejercicio Autoevaluación</h4>
                <p>Conducta entorno trabajo 2021</p>
                <a href="visor_excel_2.php">Abrir</a>
                <a href="ficheros-adm/Ejercicio.xls">Descargar</a>
            </div>

            <!--Tarjeta 4-->
            <div class="card-files">
                <img src="../img/iconos/pdf.png">
                <p class="fecha-files">15 noviembre 2021</p>
                <h4>UA1</h4>
                <p>Unidad de Aprendizaje 1 - Diseño Web</p>
                <a href="visor_pdf_4.php">Abrir</a>
                <a href="ficheros-adm/PHP_download/download_pdf4.php">Descargar</a>
            </div>

            <!--Tarjeta 5-->
            <div class="card-files">
                <img src="../img/iconos/excel.png">
                <p class="fecha-files">15 noviembre 2021</p>
                <h4>Encuesta Conocimientos</h4>
                <p>Encuesta aprendizajes y entorno laboral</p>
                <a href="visor_excel_3.php">Abrir</a>
                <a href="ficheros-adm/PRE.xls">Descargar</a>
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

    </div>



    <!--Incrustamos el código del botón de scroll_up-->
    <?php
        include "../includes/scroll_button.php"
    ?>

    <!-- Incrustamos el código del footer-->
    <?php
        include "../includes/footer_assets.php";
    ?>
    </div>

    <!--Enlace a los scripts de JavaScript-->
    <script src="../js/script.js"></script>

</body>
</html>