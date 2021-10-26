<?php

    /**** INICIALIZAMOS LA SESIÓN ****/
    session_start();

    include "conexion_bd.php";

    $usuario=$_POST['usuario'];
    $pwd=$_POST['contrasena'];
    
    //Guardamos el valor de la contraseña encriptada para su búsqueda en la BD
    //$pwd=hash('sha512',$pwd);

    /**** VALIDAMOS QUE LOS CREDENCIALES EXISTEN EN LA BD ****/
    $validar_login=mysqli_query($conexion,"SELECT * FROM socios WHERE usuario='$usuario' AND contrasena='$pwd'");

    /**** SI LOS CREDENCIALES INTRODUCIDOS SE ENCUENTRAN EN LA BD ****/
    if(mysqli_num_rows($validar_login)>0){

        //Almacenamos los valores de inicio de sesión del usuario
        $_SESSION['usuario']=$usuario;
        header("location: bienvenida.php");
        exit();
    }else{
        echo '
            <script>
                alert("Usuario no existe, por favor verifique los datos introducidos");
                window.location="../index.php";
            </script>';
        exit();
    }




/*

    // sql para consultar una tabla (según tu BD)
    $sql = "SELECT usuario, contrasena FROM socios where usuario='$u' and contrasena='$c'";
    $resultado = mysqli_query($conexion, $sql);  
    
    //Si se encuentra un registro con la consulta SQL
    if (mysqli_num_rows($resultado) > 0) {
      // Salida de datos para cada fila. Cargamos el usuario y la contraseña en las variables globales de sesión
      $_SESSION["usuario"]=$u;
      $_SESSION["contrasena"]=$c;

      //En el caso en que las credenciales se encuentren almacenadas en la BD

      //Comprobamos si el usuario logeado es "Administrador"
      $sql="SELECT ROL_USER FROM socios WHERE usuario='$u' and contrasena='$c'";
      $rol_user= mysqli_query($conexion, $sql);

      if (mysqli_num_rows($rol_user) > 0) {    //Si existe un registro al menos como respuesta a la consulta SQL
        // Salida de datos para cada fila
        while($row = mysqli_fetch_assoc($rol_user)) {       //Guardamos el resultado de la consulta con sus campos en un array asociativo

            //Verificamos el contenido del elemento del array asociativo, preguntando por el rol que contiene, asignado al usuario que se logea
            if($row["ROL_USER"]=="administrador"){
             //echo "<br><br>Has iniciado sesión como: <b>ADMINISTRADOR</b>";   
             //echo "<br><br><br><p style='text-align:center;font-size:100;width:14em;border: 1px solid black;margin:auto;padding:5px'>Has iniciado sesión como: <b>ADMINISTRADOR</b></p><br>";
            /*SE HA LOGEADO EL USUARIO COMO ADMINISTRADOR, SE MUESTRA EL PORTAL DE GESTIÓN */
     /*        print <<<AQUI
             <?php
                 session_start();
             ?>
             <!DOCTYPE html>
         <html lang="es">
         <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta name="author" content="Juan Santaella">
         <title>INICIO SESIÓN-CLUB BALLESTER</title>
     
         <!--Icono en el title-->
         <link rel="icon" type="image/png" href="../img/logo.png">
     
         <!--Enlazamos la fuente de texto de Google Fonts-->
         <link rel="preconnect" href="https://fonts.googleapis.com">
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
     
         <!--Enlazamos las fuentes de Font Awesome-->
         <script src="https://kit.fontawesome.com/4e2bb02eb5.js" crossorigin="anonymous"></script>
     
         <!--Enlazamos la hoja de estilos externa-->
         <link rel="stylesheet" href="../css/style.css">
         <link rel="stylesheet" href="../formulario_login/css/error.css">
     </head>
     
     <body>
         <header>
             <div class="container">
                 <div>
                     <a href="../inicio.php"><img class="logotipo" id="logotipo" src="../img/logo.png" alt="Club Ciclista Ballester" width="120" height="50"></a>
                 </div>
                 <h1 class="encabezado">Club Ciclista Ballester</h1>
             </div> 
             <nav id="site-nav" class="site-nav">
                 <ul>
                     <li><a href="../inicio.php">Inicio</a></li>  
                 </ul>
             </nav>
         </header>
     
         <!--Incrustamos el código de la cabecera-->
         <?php
             include "../includes/header.php";
         ?>
         <!--Mostramos el cuadro de error-->
         <div class="contenedor-form">
             <div class="toggle">
                 <!--<span>Crear Cuenta</span>-->
             </div>
             <div class="formulario">  
                 <h2>Has iniciado sesión como <b>ADMINISTRADOR</b></h2>
                 <form action="../formulario_login/login.php" method="POST">
                     <input type="submit" name="submit" value="Volver">
                 </form>
             </div>
     
         </div>
     
         <!--Incrustamos el footer-->
         <?php
             include "../includes/footer.php";
         ?>
         
         <!--Enlazamos el JQuery y el archivo con las funicones js-->
         <script src="js/jquery-3.6.0.min.js"></script>
         <!--<script src="js/login.js"></script>-->
         </body>
         </html>
AQUI;

            }else{
             //echo "<br><br>Has iniciado sesión como: <b>USUARIO</b>";
             //echo "<br><br><br><p style='text-align:center;font-size:700;width:14em;border: 1px solid black;margin:auto;padding:5px'>Has iniciado sesión como: <b>USUARIO</b></p><br>";
            
            /****SE HA LOGEADO EL USUARIO COMO SOCIO, MOSTRAMOS EL PORTAL DE LOS SOCIOS LOGEADOS****/
  /*      print <<<AQUI
        <?php
            session_start();
        ?>
                
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="Description" content="Club Ciclista Ballester"/>
            <meta name="Keywords" content="Club Ciclista Ballester, escuela de ciclismo en Tenerife, mountainbike, ciclismo, Tenerife, escuela de mountainbike, ciclismo de carretera, escuela de mountainbike en Tenerife, ciclismo de carretera en Tenerife, ciclismo en Candelaria, escuela de ciclismo de Candelaria, circuito de Punta Larga, Punta Larga, MTB, ciclismo en Tenerife"/>
            <meta name="author" content="Juan Santaella">
        
            <!--Enlazamos la fuente de texto de Google Fonts-->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
        
            <!--Enlazamos las fuentes de Font Awesome-->
            <script src="https://kit.fontawesome.com/4e2bb02eb5.js" crossorigin="anonymous"></script>
        
            <!--Enlazamos la hoja de estilos externa-->
            <link rel="stylesheet" href="../css/style.css">
            <link rel="stylesheet" href="css/login.css">
        
            <title>ZONA SOCIOS-CLUB BALLESTER</title>
        
            <!--Icono en el title-->
            <link rel="icon" type="image/png" href="../img/logo.png">
        </head>
        <body>
            <!--Creamos la Social Bar vertical-->
            <div class="red">
                <div id="facebook"><a href="https://www.facebook.com/clubciclistaballester.azucareraespanola" target="none" class="fa fa-facebook"></a></div>
                <div id="twitter"><a href="#" class="fa fa-twitter"></a></div>
                <div id="youtube"><a href="https://www.youtube.com/results?search_query=club+ciclista+ballester" target="none" class="fa fa-youtube"></a></div>
                <div id="instagram"><a href="https://www.instagram.com/" target="none" class="fa fa-instagram"></a></div>
                <div id="correo"><a href="#" class="fa fa-envelope"></a></div>
            </div>
            <header>
                <div class="container">
                    <div>
                        <a href="../inicio.php"><img class="logotipo" id="logotipo" src="../img/logo.png" alt="Club Deportivo Ballester" width="120" height="50"></a>
                    </div>
                    <h1 class="encabezado">Club Ciclista Ballester</h1>
                </div> 
                <nav id="site-nav" class="site-nav">
                    <ul>
                        <li><a href="../inicio.php"><i class="fa fa-home site-nav--icon"></i>Inicio</a></li>
                        <li><a href=""><i class="fa fa-history site-nav--icon"></i>Agenda</a></li>
                        <li><a href=""><i class="fa fa-graduation-cap site-nav--icon"></i>Anuncios</a></li>
                        <li><a href=""><i class="fa fa-newspaper site-nav--icon"></i>Protocolo COVID</a></li>
                        <li><a href=""><i class="fa fa-calendar-alt site-nav--icon"></i>Gestiones</a></li>
                        <li><a href=""><i class="fa fa-images site-nav--icon"></i>Galería</a></li>
                        <li><a href=""><i class="fa fa-envelope site-nav--icon"></i>Mensajes</a></li>   
                    </ul>
                </nav>
                <div id="menu-toggle" class="menu-toggle" onclick="cambiarClase()">
                    <div class="hamburger"></div>
                </div>
            </header>
        
        
            <aside>
        
        
            </aside>
        
            <!--CARDS CON EFECTO HOVER-->
            <article class="card_hover">
                <section>
                    <!--Contenedor-->
                    <div class="container_card">
        
                        <!--Tarjeta 1-->
                        <div class="card">
                            <img src="img/logo.jpg">
                            <h4>ÁREA DE SOCIOS 1</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, at quibusdam!</p>
                            <a href="#">Leer más</a>
                        </div>
        
                        <!--Tarjeta 2-->
                        <div class="card">
                            <img src="img/logo.jpg">
                            <h4>ÁREA DE SOCIOS 2</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, at quibusdam!</p>
                            <a href="#">Leer más</a>
                        </div>
        
                        <!--Tarjeta 3-->
                        <div class="card">
                            <img src="img/logo.jpg">
                            <h4>ÁREA DE SOCIOS 3</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, at quibusdam!</p>
                            <a href="#">Leer más</a>
                        </div>
        
                    </div>
        
                </section>
        
            </article>
        
            <!--Código del footer-->
            <!--Diseñamos la zona del footer-->
            <footer>
                <div class="container__footer">
                    <!--Caja del logo y Términos-->
                    <div class="box__footer">
                       <div class="logo">
                            <a href="../inicio.php"><img src="img/logo.png" alt="Club Ciclista Ballester"></a>
                       </div>
                       <div class="terms">
                           <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat sequi obcaecati ex sunt fuga corporis, ipsum vitae asperiores tempora expedita nemo laboriosam iusto natus ipsam autem dolor aliquid similique. Veritatis!</p>
                       </div>
                    </div> 
                    <!--Caja de información del Club-->
                    <div class="box__footer">
                        <h2>Nuestro Club</h2>
                        <a href="#">Historia></a>
                        <a href="#">Escuela></a>
                        <a href="#">Dirección></a>
                        <a href="#">Contacto></a>
                    </div>
        
                    <!--Caja de información general-->
                    <div class="box__footer">
                        <h2>Información</h2>
                        <a href="#">Calendario></a>
                        <a href="#">Eventos></a>
                        <a href="#">Equipaciones></a>
                        <a href="#">Galería></a>
                    </div>
        
                    <!--Caja de Redes Sociales-->
                    <div class="box__footer">
                        <h2>Redes Sociales</h2>
                        <a href="https://www.facebook.com/clubciclistaballester.azucareraespanola" target="none" ><i class="fab fa-facebook-square"></i> Facebook</a>
                        <a href="#"><i class="fab fa-twitter-square"></i> Twitter</a>
                        <a href="https://www.youtube.com/results?search_query=club+ciclista+ballester" target="none" ><i class="fab fa-youtube"></i> YouTube</a>
                        <a href="https://www.instagram.com/"><i class="fab fa-instagram-square" target="none" ></i> Instagram</a>
                        <a href="#"><i class="fas fa-envelope-square"></i> Correo</a>
                    </div>
                </div>
        
                <!--Sección de los derechos de copyright-->
                <div class="box__copyright">
                    <hr><p>Todos los derechos reservados &copy; 2021 <b>Juan Santaella</b></p>            
                </div>
            </footer>
            
            <!--Incrustamos el código del footer-->
            <?php
                include "includes/footer.php";
            ?>
        
            <!--Enlazamos los script de js-->
            <script src="./js/app.js"></script>
        </body>
        </html>
AQUI;

            }
          //echo "<br><br><p style=Has iniciado sesión como: <b>".$row["rol_user"]."</b><br><br>";
          //echo "<br><br><br><p style='text-align:center;font-size:700;width:14em;border: 1px solid black;margin:auto;padding:5px'>Has iniciado sesión como: <b>".$row["rol_user"]."</b><br><br>";
        }
      } else {
        echo "Sin resultados";
      }
       

      //En el caso en que las credenciales sean incorrectas
    } else {
        
        //Mostramos el mensaje de error al usuario
        print <<<AQUI
        <?php
            session_start();
        ?>
        <!DOCTYPE html>
    <html lang="es">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Juan Santaella">
    <title>INICIO SESIÓN-CLUB BALLESTER</title>

    <!--Icono en el title-->
    <link rel="icon" type="image/png" href="../img/logo.png">

    <!--Enlazamos la fuente de texto de Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

    <!--Enlazamos las fuentes de Font Awesome-->
    <script src="https://kit.fontawesome.com/4e2bb02eb5.js" crossorigin="anonymous"></script>

    <!--Enlazamos la hoja de estilos externa-->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../formulario_login/css/error.css">
</head>

<body>
    <header>
        <div class="container">
            <div>
                <a href="../inicio.php"><img class="logotipo" id="logotipo" src="../img/logo.png" alt="Club Ciclista Ballester" width="120" height="50"></a>
            </div>
            <h1 class="encabezado">Club Ciclista Ballester</h1>
        </div> 
        <nav id="site-nav" class="site-nav">
            <ul>
                <li><a href="../inicio.html">Inicio</a></li>  
            </ul>
        </nav>
    </header>

    <!--Incrustamos el código de la cabecera-->
    <?php
        include "../includes/header.php";
    ?>
    <!--Mostramos el cuadro de error-->
    <div class="contenedor-form">
        <div class="toggle">
            <!--<span>Crear Cuenta</span>-->
        </div>
        <div class="formulario">  
            <h2>Usuario o contraseña incorrecta</h2>
            <form action="../formulario_login/login.php" method="POST">
                <input type="submit" name="submit" value="Volver">
            </form>
        </div>

    </div>

    <!--Incrustamos el footer-->
    <?php
        include "../includes/footer.php";
    ?>
    
    <!--Enlazamos el JQuery y el archivo con las funicones js-->
    <script src="js/jquery-3.6.0.min.js"></script>
    <!--<script src="js/login.js"></script>-->
</body>
</html>
AQUI;
        //Cerramos la sesión
        session_destroy();
    }
    //Cerramos la conexión con la BD
    mysqli_close($conexion);
 }

?>*/





?>