<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Juan Santaella">
    <title> Club Ciclista Ballester </title>

    <!--Icono en el title-->
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">

    <script src="https://kit.fontawesome.com/4e2bb02eb5.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/style.css">    <!--*** LOS ESTILOS SIEMPRE VAN DESPUÉS DE LOS ICONOS ***-->

    <!--meta etiqueta que va a convertir a la página en RESPONSIVE-->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

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
                        <li class="menu-selected"><a href="club.php" class="text-menu-selected"><i class="fas fa-biking"></i> Club</a></li>
                        <li><a href="escuela.php"><i class="fas fa-chalkboard-teacher"></i> Escuela</a></li>
                        <li><a href="galeria.php"><i class="fas fa-images"></i> Galería</a></li>
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

    <div class="container-cover-club">
        <div class="container-info-cover">
            <h1> Nuestro Club </h1>  
            <p>El Club Ciclista Ballester es una entidad deportiva fundada en 1997</p>
        </div>
    </div>

    <!--Tarjetas 3D-->

    <!-- Primer contenedor -->
    <div>
        <!--Contenedor de las tarjetas-->
        <div class="container__card">

            <!--Primera tarjeta-->
            <!--Contenedor padre-->
            <div class="card__father">
                <!--Contenedor de las tarjetas-->
                <div class="card">
                    <!--Contenedor de la parte frontal de la tarjeta-->
                    <div class="card__front" style="background-image: url(../img/Antonio.png);">
                        <div class="bg"></div>
                        <!--Contenedor del cuerpo del frontal de la tarjeta-->
                        <div class="body__card__front">
                            <h1>Antonio Sánchez</h1>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, iure!</p> -->
                        </div>

                    </div>
                    <!--Contenedor de la parte posterior de la tarjeta-->
                    <div class="card__back">
                        <!--Contenedor del cuerpo de la zona posterior de la tarjeta-->
                        <div class="body__card__back">
                            <h1>Presidente</h1>
                            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, veniam voluptas ex aliquam beatae dolore!</p> -->
                            <input type="button" value="Leer más">
                        </div>

                    </div>
                </div>
            </div>

            <!--Segunda tarjeta-->
            <!--Contenedor padre-->
            <div class="card__father">
                <!--Contenedor de las tarjetas-->
                <div class="card">
                    <!--Contenedor de la parte frontal de la tarjeta-->
                    <div class="card__front" style="background-image: url(../img/Ana.png);">
                        <div class="bg"></div>
                        <!--Contenedor del cuerpo del frontal de la tarjeta-->
                        <div class="body__card__front">
                            <h1>Ana Belén Mesa</h1>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, iure!</p> -->
                        </div>

                    </div>
                    <!--Contenedor de la parte posterior de la tarjeta-->
                    <div class="card__back">
                        <!--Contenedor del cuerpo de la zona posterior de la tarjeta-->
                        <div class="body__card__back">
                            <h1>Directora Deportiva</h1>
                            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, veniam voluptas ex aliquam beatae dolore!</p> -->
                            <input type="button" value="Leer más">
                        </div>

                    </div>
                </div>
            </div>

            <!--Tercera tarjeta-->
            <!--Contenedor padre-->
            <div class="card__father">
                <!--Contenedor de las tarjetas-->
                <div class="card">
                    <!--Contenedor de la parte frontal de la tarjeta-->
                    <div class="card__front" style="background-image: url(../img/Sergio.png);">
                        <div class="bg"></div>
                        <!--Contenedor del cuerpo del frontal de la tarjeta-->
                        <div class="body__card__front">
                            <h1>Sergio González</h1>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, iure!</p> -->
                        </div>

                    </div>
                    <!--Contenedor de la parte posterior de la tarjeta-->
                    <div class="card__back">
                        <!--Contenedor del cuerpo de la zona posterior de la tarjeta-->
                        <div class="body__card__back">
                            <h1>Director Deportivo</h1>
                            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, veniam voluptas ex aliquam beatae dolore!</p> -->
                            <input type="button" value="Leer más">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Segundo contenedor -->
    <div>
        <!--Contenedor de las tarjetas-->
        <div class="container__card">

            <!--Primera tarjeta-->
            <!--Contenedor padre-->
            <div class="card__father">
                <!--Contenedor de las tarjetas-->
                <div class="card">
                    <!--Contenedor de la parte frontal de la tarjeta-->
                    <div class="card__front" style="background-image: url(../img/road-cycling.png);">
                        <div class="bg"></div>
                        <!--Contenedor del cuerpo del frontal de la tarjeta-->
                        <div class="body__card__front">
                            <h1>Josué Sánchez</h1>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, iure!</p> -->
                        </div>

                    </div>
                    <!--Contenedor de la parte posterior de la tarjeta-->
                    <div class="card__back">
                        <!--Contenedor del cuerpo de la zona posterior de la tarjeta-->
                        <div class="body__card__back">
                            <h1>Director Deportivo</h1>
                            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, veniam voluptas ex aliquam beatae dolore!</p> -->
                            <input type="button" value="Leer más">
                        </div>

                    </div>
                </div>
            </div>

            <!--Segunda tarjeta-->
            <!--Contenedor padre-->
            <div class="card__father">
                <!--Contenedor de las tarjetas-->
                <div class="card">
                    <!--Contenedor de la parte frontal de la tarjeta-->
                    <div class="card__front" style="background-image: url(../img/road-cycling.png);">
                        <div class="bg"></div>
                        <!--Contenedor del cuerpo del frontal de la tarjeta-->
                        <div class="body__card__front">
                            <h1>Rubén Domínguez</h1>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, iure!</p> -->
                        </div>

                    </div>
                    <!--Contenedor de la parte posterior de la tarjeta-->
                    <div class="card__back">
                        <!--Contenedor del cuerpo de la zona posterior de la tarjeta-->
                        <div class="body__card__back">
                            <h1>Director Deportivo</h1>
                            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, veniam voluptas ex aliquam beatae dolore!</p> -->
                            <input type="button" value="Leer más">
                        </div>

                    </div>
                </div>
            </div>

            <!--Tercera tarjeta-->
            <!--Contenedor padre-->
            <div class="card__father">
                <!--Contenedor de las tarjetas-->
                <div class="card">
                    <!--Contenedor de la parte frontal de la tarjeta-->
                    <div class="card__front" style="background-image: url(../img/road-cycling.png);">
                        <div class="bg"></div>
                        <!--Contenedor del cuerpo del frontal de la tarjeta-->
                        <div class="body__card__front">
                            <h1>Tomás Ramos</h1>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, iure!</p> -->
                        </div>

                    </div>
                    <!--Contenedor de la parte posterior de la tarjeta-->
                    <div class="card__back">
                        <!--Contenedor del cuerpo de la zona posterior de la tarjeta-->
                        <div class="body__card__back">
                            <h1>Director Deportivo</h1>
                            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, veniam voluptas ex aliquam beatae dolore!</p> -->
                            <input type="button" value="Leer más">
                        </div>

                    </div>
                </div>
            </div>

            <!--Cuarta tarjeta-->
            <!--Contenedor padre-->
            <div class="card__father">
                <!--Contenedor de las tarjetas-->
                <div class="card">
                    <!--Contenedor de la parte frontal de la tarjeta-->
                    <div class="card__front" style="background-image: url(../img/road-cycling.png);">
                        <div class="bg"></div>
                        <!--Contenedor del cuerpo del frontal de la tarjeta-->
                        <div class="body__card__front">
                            <h1>Héctor Marrero</h1>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, iure!</p> -->
                        </div>

                    </div>
                    <!--Contenedor de la parte posterior de la tarjeta-->
                    <div class="card__back">
                        <!--Contenedor del cuerpo de la zona posterior de la tarjeta-->
                        <div class="body__card__back">
                            <h1>Director Deportivo</h1>
                            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum, veniam voluptas ex aliquam beatae dolore!</p> -->
                            <input type="button" value="Leer más">
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Artículo -->
    <div class="container-content">
        <article>

            <h1>Mucho más que un Club Ciclista</h1>

            <p>El Club Ciclista Ballester es una Entidad Deportiva fundada en 1997, centrada en la práctica y divulgación del Ciclismo a nivel federativo, en todas sus categorías. En la actualidad contamos con la Escuela de Ciclismo de Candelaria y con el Club Ciclista Ballester, donde trabajamos actividades deportivas relacionadas con la bicicleta y la introducción a la competición. Durante todos estos años han participado en nuestro Club infinidad de deportistas desde edades tempranas hasta las maduras, y hoy en día seguimos contando con una abundante cantera.</p>

            <h1>Desarrollando unos valores</h1>

            <p>Formar y orientar a personas a través de la actividad deportiva física lúdico recreativa utilizando la bicicleta como medio para ello, es el objetivo general de nuestro Club.</p>

            <img src="../img/DSC_9147.jpg" alt="Club Ciclista Ballester posando">

            <p>Formar a nuestros alumnos en actitudes valores y normas a través de la práctica deportiva. Desarrollar las cualidades físicas individuales. Contribuír a la educación integral del alumno, dando prioridad a los estudios. Concienciar y sensibilizar a todos los niños/as sobre la necesidad de la práctica de ejercicio físico como medio para la diversión, la relación social y la mejora de las condiciones de salud y conocimiento de la higiene corporal. Iniciación a la competición sin priorizar los resultados. Potenciar la tenacidad y la autoestima para afrontar las adversidades con optimismo y realismo. Crear hábitos de trabajo y disciplina deportiva. Educar a los alumnos en temas transversales como la educación vial y medio ambiental. Fomentar la participación familiar en el deporte, son algunos de nuestros objetivos específicos.</p>

        </article>

        <!--Artículos relacionados-->
        <div class="container-aside">

            <!--aside 1-->
            <aside>
                <img src="../img/act_educativas/DSC_1216.jpg" alt="actividad educativa">
                <h2>Actividades educativas</h2>
                <p>Arrancamos con una de las actividades programadas en nuestro calendario basadas en el deporte y la psicología en un entorno natural. 

                <!--Botón para abrir un artículo-->
                <a href=""><button>Leer más</button></a>
            </aside>

            <!--aside 2-->
            <aside>
                <img src="../img/DSC_8191.jpg" alt="grupo Ballester">
                <h2>Título del artículo</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus in nulla perspiciatis deleniti! Dicta consequuntur, fuga adipisci quam magnam molestias. Voluptatibus autem hic dolor perferendis?</p>

                <!--Botón para abrir un artículo-->
                <a href=""><button>Leer más</button></a>
            </aside>

            <!--aside 3-->
            <aside>
                <img src="../img/DSC_7372.jpg" alt="ruedas bicicleta">
                <h2>Título del artículo</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus in nulla perspiciatis deleniti! Dicta consequuntur, fuga adipisci quam magnam molestias. Voluptatibus autem hic dolor perferendis?</p>

                <!--Botón para abrir un artículo-->
                <a href=""><button>Leer más</button></a>
            </aside>
            <!--aside 4-->
            <aside>
                <img src="../img/DSC_7264.jpg" alt="circuito mountainbike">
                <h2>Título del artículo</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus in nulla perspiciatis deleniti! Dicta consequuntur, fuga adipisci quam magnam molestias. Voluptatibus autem hic dolor perferendis?</p>

                <!--Botón para abrir un artículo-->
                <a href=""><button>Leer más</button></a>
            </aside>

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