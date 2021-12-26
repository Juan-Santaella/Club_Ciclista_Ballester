<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="> -->
    <meta name="author" content="Juan Santaella">
    <title> Club Ciclista Ballester </title>

    <!--Icono en el title-->
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

    <script src="https://kit.fontawesome.com/4e2bb02eb5.js" crossorigin="anonymous"></script>

    <!--Animate.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <link rel="stylesheet" href="../css/contact_style.css">    <!--Hoja de estilos de la página de contacto-->
    
    <link rel="stylesheet" href="../css/style.css">    <!--*** LOS ESTILOS SIEMPRE VAN DESPUÉS DE LOS ICONOS ***-->

    <!--meta etiqueta que va a convertir a la página en RESPONSIVE-->
    <meta name="viewport" content= initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

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
                        <li><a href="club.php"><i class="fas fa-biking"></i> Club</a></li>
                        <li><a href="escuela.php"><i class="fas fa-chalkboard-teacher"></i> Escuela</a></li>
                        <li><a href="galeria.php"><i class="fas fa-images"></i> Galería</a></li>
                        <li class="menu-selected"><a href="contacto.php" class="text-menu-selected"><i class="fas fa-envelope"></i> Contáctanos</a></li>
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
        <h1 class="contact_logo">Contacta con <span>nosotros</span></h1>

        <div class="contact-wrapper">
            <div class="contact-form">
                <h3>Contáctanos</h3>
                <form action="PHP/mail_contacto.php" method="POST">
                    <p>
                        <label>Nombre</label>
                        <input type="text" name="nombre" autofocus>
                    </p>
                    <p>
                        <label>Email</label>
                        <input type="email" name="email">
                    </p>
                    <p>
                        <label>Teléfono</label>
                        <input type="tel" id="telefono" name="telefono" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}">     <!--Si el tfn se requiere poner required al final-->
                    </p>
                    <p>
                        <label>Asunto</label>
                        <input type="text" name="asunto">
                    </p>
                    <p class="block">
                        <label>Mensaje</label>
                        <textarea name="mensaje" rows="3"></textarea>
                    </p>
                    <p class="block">
                        <button type="submit">
                            Enviar
                        </button> 
                    </p>
                </form>
            </div>
            <div class="contact-info">
                <h4>Más información</h4>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> C. Crujiola 5/6, Edif. Alsaca V Torre I, Piso 3-9, 38530, Candelaria, Tenerife, Islas Canarias, España</li>
                    <li><i class="fas fa-phone"></i> 648 603 247</li>    
                    <li><i class="fas fa-envelope-open-text"></i> info@clubdballester.es</li>        
                </ul>
                <p>
                    Remítenos un mensaje por medio del formulario, si deseas realizarnos alguna consulta. Responderemos en el menor plazo de tiempo posible.
                </p>
                <p>Club Ciclista Ballester</p>
            </div>
        </div>
    </div>

    <!--/***************************  GOOGLE MAPS  **********************************/-->

    <div class="map-wrapper">
        <iframe class="googlemap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3510.7943315897032!2d-16.367802784923413!3d28.365066982524027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.  1!3m3!1m2!1s0xc402de4482248e3%3A0xdfa16fc3903c1d16!2sClub%20Ciclista%20Ballester!5e0!3m2!1ses!2ses!4v1635422427075!5m2!1ses!2ses" width="600" height="450"    style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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