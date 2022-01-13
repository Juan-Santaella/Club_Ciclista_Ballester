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
                        <li><a href="club.php"><i class="fas fa-biking"></i> Club</a></li>
                        <li class="menu-selected"><a href="escuela.php" class="text-menu-selected"><i class="fas fa-chalkboard-teacher"></i> Escuela</a></li>
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

    <div class="container-cover-escuela">
        <div class="container-info-cover">
            <h1> Escuela de Ciclismo </h1>  
            <p>La Escuela de Ciclismo de Candelaria ,donde formamos y orientamos a través de la práctica deportiva</p>
        </div>
    </div>

    <!-- Artículo -->
    <div class="container-content">
        <article>

            <h1>Forjando deportistas con valores</h1>

            <p>No.podemos estar mas contentos al ver la gran  aceptación que ha tenido la escuela de ciclismo de Candelaria!!! Orgullosos de seguir cumpliendo objetivos ...orgullosos de seguir potenciando este maravilloso deporte

            <img src="../img/DSC_9751.jpg" alt="Club Ciclista Ballester posando">

                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et tempora quas temporibus, neque libero vitae nam! Hic similique voluptatum error molestiae est magnam numquam officia eos officiis, tempora inventore unde omnis molestias corrupti, labore consequatur dolorum debitis iste culpa, odit voluptatem non libero! Nam repudiandae assumenda enim obcaecati minus sint adipisci commodi, ex numquam debitis libero esse aperiam laborum autem accusantium ad. Exercitationem, repudiandae doloribus est quae blanditiis soluta nam et distinctio incidunt aut illo veniam atque sapiente totam eum vel odio, iusto velit. Minus doloribus sint illo officia aliquid vel. Non doloremque odit, fugiat error blanditiis soluta nostrum veniam?</p>

                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui ratione earum ipsum vel sit fugiat, harum quidem laboriosam veritatis placeat aperiam rem beatae commodi enim sapiente est natus consequatur asperiores. Ratione distinctio blanditiis aut similique adipisci fugiat sequi praesentium esse? Eius, architecto est nisi quae eligendi voluptas et aspernatur debitis optio corporis, cumque sit aliquid quam sunt inventore consequatur, soluta fugiat reprehenderit nostrum assumenda delectus esse aliquam voluptate. Eligendi, aut? Cupiditate omnis repudiandae quasi, quod voluptas sequi itaque saepe sint impedit nisi blanditiis laudantium cum dicta rerum totam magnam. Ducimus totam voluptas error eos pariatur culpa quibusdam alias accusamus perferendis!</p>

                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non nam laudantium architecto laboriosam. Nihil sunt saepe voluptatem incidunt delectus? Nisi commodi, quasi optio perferendis distinctio iste natus voluptate rerum ullam molestias eligendi iusto, odit excepturi ex, autem ad sapiente? Dolores tempore inventore minus voluptatibus tempora! Natus quos animi excepturi sed quidem sunt labore recusandae obcaecati adipisci ipsum a ex laboriosam hic architecto dolorum quo repellendus consequatur doloremque quia laudantium, quod culpa illo! Rem qui quibusdam deleniti aliquam ut quae sit ipsum cupiditate quasi quo voluptas adipisci ipsa veniam recusandae nihil labore dolorum esse, quia autem, quod consequuntur quam! Dolor, ipsa perferendis est quasi architecto rem quisquam! Eveniet quam quibusdam officia ullam exercitationem eos quae? Aliquid, consequuntur ipsa voluptatum cum illum, quibusdam quis tenetur id pariatur autem magni provident maiores adipisci quos eos doloribus aspernatur. Esse eligendi exercitationem consectetur deleniti distinctio earum? Quos ea error ratione. Magni molestias eum rem modi!</p>

                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur natus non amet sapiente hic, minima cum labore quis voluptate quibusdam odit esse quisquam, velit totam. Fugit minima, dolor dicta explicabo ad aliquid nemo quibusdam eos voluptatum delectus? Perferendis maiores, distinctio, excepturi mollitia laborum voluptatum rerum autem hic pariatur non iure.</P>

        </article>

        <!--Artículos relacionados-->
        <div class="container-aside">

            <!--aside 1-->
            <aside>
                <img src="../img/DSC_7372.jpg" alt="ruedas bicicletas">
                <h2>Título del artículo</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus in nulla perspiciatis deleniti! Dicta consequuntur, fuga adipisci quam magnam molestias. Voluptatibus autem hic dolor perferendis?</p>

                <!--Botón para abrir un artículo-->
                <a href="maintenance/maintenance_escuela.php"><button>Leer más</button></a>
            </aside>

            <!--aside 2-->
            <aside>
                <img src="../img/DSC_8191.jpg" alt="grupo Ballester">
                <h2>Título del artículo</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus in nulla perspiciatis deleniti! Dicta consequuntur, fuga adipisci quam magnam molestias. Voluptatibus autem hic dolor perferendis?</p>

                <!--Botón para abrir un artículo-->
                <a href="maintenance/maintenance_escuela.php"><button>Leer más</button></a>
            </aside>

            <!--aside 3-->
            <aside>
                <img src="../img/DSC_7264.jpg" alt="circuito mountainbike">
                <h2>Título del artículo</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus in nulla perspiciatis deleniti! Dicta consequuntur, fuga adipisci quam magnam molestias. Voluptatibus autem hic dolor perferendis?</p>

                <!--Botón para abrir un artículo-->
                <a href="maintenance/maintenance_escuela.php"><button>Leer más</button></a>
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