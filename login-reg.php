<?php
    /**** VERIFICAMOS SI TENEMOS YA INICIADA SESIÓN ****/
    session_start();

    //Si existe una sesión iniciada, no nos vuelve a mostrar la página de login, sino la de bienvenida directamente
    if(isset($_SESSION['usuario'])){
        header("location:login-register/php/bienvenida.php");
    }
?>

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

    <link rel="stylesheet" href="css/style.css">    <!--*** LOS ESTILOS SIEMPRE VAN DESPUÉS DE LOS ICONOS ***-->

    <!--meta etiqueta que va a convertir a la página en RESPONSIVE-->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

</head>
<!-- <body class="background_login"> -->
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
                        <li><a href="galeria.php"><i class="fas fa-images"></i> Galería</a></li>
                        <li><a href="contacto.php"><i class="fas fa-envelope"></i> Contáctanos</a></li>
                        <li class="menu-selected"><a href="login-reg.php" class="text-menu-selected"><i class="fas fa-lock"></i> Entrar</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        
        <!--Icono hamburguesa del menú responsive-->
        <div id="icon-menu">
            <i class="fas fa-bars"></i>
        </div>

    </header>
    
    <!-- Formulario de Login - Registro -->
    <div class="container-login" id="move-content">

    <main>
        
        <!--Contenedor principal-->
        <div class="contenedor__todo">
            <!--Contenedor que se va a mostrar por detrás-->
            <div class="caja__trasera">
                <!--Contenedor trasero para el login-->
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia Sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <!--Contenedor trasero para el registro-->
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas inicar sesión</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>
            <!--Contenedor de los formularios que vamos a utilizar (login y register)-->
            <div class="contenedor__login-register">
                <!--Formulario de login-->
                <form action="login-register/php/login_usuario_bd.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" name="usuario" placeholder="Usuario">
                    <input type="password" name="contrasena" placeholder="Contraseña" required>
                    <!--<input type="submit" name="submit" value="Entrar">-->
                    <button>Entrar</button>
                </form>
                <!--Formulario de register-->
                <form action="login-register/php/registro_usuario_bd.php" method="POST" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" name="numero_socio" placeholder="Nº Socio" required>
                    <input type="text" name="usuario" placeholder="Usuario" required>
                    <input type="password" name="contrasena" placeholder="Contraseña" required>
                    <input type="text" name="nombre" placeholder="Nombre" required>
                    <input type="text" name="apellidos" placeholder="Apellidos" required>
                    <input type="email" name="correo_elec" placeholder="Correo Electrónico" required>
                    <input type="text" name="telefono" placeholder="Teléfono" required>
                    <!--<input type="submit" name="submit" value="Registrarse">-->
                    <!--Button tiene por defecto type="submit"-->
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>
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