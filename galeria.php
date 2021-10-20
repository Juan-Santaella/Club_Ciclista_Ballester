<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Juan Santaella">
    <title> Club Ciclista Ballester </title>

    <!--Icono en el title-->
    <link rel="icon" type="image/png" href="img/logo.png">

    <script src="https://kit.fontawesome.com/4e2bb02eb5.js" crossorigin="anonymous"></script>

    <!-- MATERIALIZE CSS -->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


    <link rel="stylesheet" href="css/style.css">    <!--*** LOS ESTILOS SIEMPRE VAN DESPUÉS DE LOS ICONOS ***-->

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

    <div class="container">

        <!--Definimos el título
        <div class="row">
            
            <div class="col s12 center-align">              La columna va a tener tamaño small de 12 columnas, (máximo, todo el espacio) y todo el texto centrado
                <h1 class="titulo">Lightbox</h1>
            </div>
        </div>-->

        <!--Definimos la galería-->
        <div class="row galeria">

            <!--s12 TAMAÑO PEQUEÑO 12 COLUMNAS, m4 TAMAÑO MEDIO 4 COLUMNAS, l3 TAMAÑO GRANDE 3 COLUMNAS, Responsive, (pequeño, mediano, grande, largo), máximo 12 columnas, por tanto, pantalla pequeña tendrá cada elemento 12 columnas, 1 elemento por línea, mediana 4 columnas, 3 elementos por línea, larga 3 columnas, 4 elementos por línea-->


            <!--Primera fila-->
            <div class="col s12 m4 l3">                           
                <div class="material-placeholder">                
                    <img src="img/DSC_5235.jpg" class="responsive-img materialboxed" alt="Imagen 1" data-caption="Lorem ipsum dolor sit amet.">           
                </div>                                            
            </div>

            <div class="col s12 m4 l3">                           
                <div class="material-placeholder">                
                    <img src="img/DSC_5235.jpg" class="responsive-img materialboxed" alt="Imagen 1" data-caption="Lorem ipsum dolor sit amet.">           
                </div>                                            
            </div>

            <div class="col s12 m4 l3">                           
                <div class="material-placeholder">                
                    <img src="img/DSC_5235.jpg" class="responsive-img materialboxed" alt="Imagen 1" data-caption="Lorem ipsum dolor sit amet.">           
                </div>                                            
            </div>

            <div class="col s12 m4 l3">                           
                <div class="material-placeholder">                
                    <img src="img/DSC_5235.jpg" class="responsive-img materialboxed" alt="Imagen 1" data-caption="Lorem ipsum dolor sit amet.">           
                </div>                                            
            </div>


            <!--Segunda fila-->
            <div class="col s12 m4 l3">                           
                <div class="material-placeholder">                
                    <img src="img/DSC_5235.jpg" class="responsive-img materialboxed" alt="Imagen 1" data-caption="Lorem ipsum dolor sit amet.">           
                </div>                                            
            </div>

            <div class="col s12 m4 l3">                           
                <div class="material-placeholder">                
                    <img src="img/DSC_5235.jpg" class="responsive-img materialboxed" alt="Imagen 1" data-caption="Lorem ipsum dolor sit amet.">           
                </div>                                            
            </div>

            <div class="col s12 m4 l3">                           
                <div class="material-placeholder">                
                    <img src="img/DSC_5235.jpg" class="responsive-img materialboxed" alt="Imagen 1" data-caption="Lorem ipsum dolor sit amet.">           
                </div>                                            
            </div>

            <div class="col s12 m4 l3">                           
                <div class="material-placeholder">                
                    <img src="img/DSC_5235.jpg" class="responsive-img materialboxed" alt="Imagen 1" data-caption="Lorem ipsum dolor sit amet.">           
                </div>                                            
            </div>


            <!--Tercera fila-->
            <div class="col s12 m4 l3">                           
                <div class="material-placeholder">                
                    <img src="img/DSC_5235.jpg" class="responsive-img materialboxed" alt="Imagen 1" data-caption="Lorem ipsum dolor sit amet.">           
                </div>                                            
            </div>

            <div class="col s12 m4 l3">                           
                <div class="material-placeholder">                
                    <img src="img/DSC_5235.jpg" class="responsive-img materialboxed" alt="Imagen 1" data-caption="Lorem ipsum dolor sit amet.">           
                </div>                                            
            </div>

            <div class="col s12 m4 l3">                           
                <div class="material-placeholder">                
                    <img src="img/DSC_5235.jpg" class="responsive-img materialboxed" alt="Imagen 1" data-caption="Lorem ipsum dolor sit amet.">           
                </div>                                            
            </div>

            <div class="col s12 m4 l3">                           
                <div class="material-placeholder">                
                    <img src="img/DSC_5235.jpg" class="responsive-img materialboxed" alt="Imagen 1" data-caption="Lorem ipsum dolor sit amet.">           
                </div>                                            
            </div>

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

    <!-- MATERIALIZE CSS -->
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!--Enlace a los scripts de JavaScript-->
    <script src="js/script.js"></script>
    <script src="js/js-lightbox.js"></script>

</body>
</html>