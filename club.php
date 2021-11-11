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
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus quae ducimus mollitia velit beatae nesciunt!</p>
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
                    <div class="card__front" style="background-image: url(img/Antonio.png);">
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
                    <div class="card__front" style="background-image: url(img/Ana.png);">
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
                    <div class="card__front" style="background-image: url(img/Sergio.png);">
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
                    <div class="card__front" style="background-image: url(img/road-cycling.png);">
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
                    <div class="card__front" style="background-image: url(img/road-cycling.png);">
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
                    <div class="card__front" style="background-image: url(img/road-cycling.png);">
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
                    <div class="card__front" style="background-image: url(img/road-cycling.png);">
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

            <h1>Mucho más que un Club</h1>

            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit non dolores consectetur, quas qui laboriosam! Similique aliquam deserunt soluta porro culpa at itaque eos ipsam molestiae dolorum dolore voluptas optio cupiditate omnis, explicabo aperiam saepe ex aut! Commodi aspernatur aliquam adipisci recusandae, facilis autem error delectus soluta accusantium quae totam quam. Ex eveniet corporis facere aspernatur nisi laudantium perferendis inventore? Necessitatibus nihil quos temporibus qui dolores commodi ipsam aperiam, dolor, minus totam modi perspiciatis ut corporis nesciunt doloremque nemo, nulla adipisci voluptatibus. Officiis repudiandae, numquam totam dignissimos, animi assumenda perspiciatis obcaecati dolore, recusandae veniam incidunt aut unde laboriosam qui fugit cum quod deserunt autem dolor explicabo dicta provident quo similique! Rem eveniet deleniti, dolorem ullam corporis necessitatibus illum rerum ducimus molestias eum nihil porro exercitationem sed laboriosam numquam voluptates accusantium debitis voluptatum? Molestias quia sed modi doloribus, possimus aut ratione numquam nulla id minus cupiditate ad error velit unde tenetur recusandae eius dolores? Magni pariatur sint animi nostrum provident, corporis vitae possimus veritatis minima incidunt perspiciatis accusamus, corrupti autem doloribus dolore velit! Tenetur sint quam autem voluptate voluptates velit nostrum fugit doloribus iusto eligendi aut inventore, nobis nulla, totam libero aspernatur veritatis consequuntur. Atque ab aliquam necessitatibus? Laborum id veniam officia ex vitae pariatur amet magnam, reprehenderit tenetur provident molestiae error. Necessitatibus nostrum assumenda totam delectus, dolorum molestiae quos earum sunt neque tempora, illo fuga id sed temporibus magni dicta alias iusto unde cumque eum quasi soluta repellendus autem. Voluptatum a quibusdam voluptatibus nihil, optio assumenda ratione voluptas. Minima pariatur eius fuga doloribus, earum dolorem vitae recusandae sed, facere tempora alias suscipit perspiciatis atque, ipsa aut voluptatem non ipsum? Fugiat in itaque repudiandae totam, sunt, iure recusandae beatae nesciunt laudantium cum similique asperiores culpa quis voluptatum, illo praesentium dolorem libero labore nihil blanditiis a! Porro officia perspiciatis quas magnam excepturi.</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque modi delectus fugit impedit. Adipisci blanditiis harum corporis atque omnis reprehenderit animi ratione, culpa vitae unde fuga neque et enim quae a consectetur velit voluptatibus suscipit dignissimos, tempore cum doloribus veniam doloremque vel! Perferendis quo, quos deleniti ipsa, quam minus officia molestiae numquam nobis nulla voluptate dicta! Iure deleniti ullam accusamus eos suscipit eaque, amet laborum quidem, ut, exercitationem architecto corporis voluptatum? Quisquam velit, nesciunt incidunt reiciendis nisi cupiditate iure iste quas placeat inventore similique asperiores, voluptas quis sequi repellat? Laboriosam odio quisquam ex voluptate doloremque explicabo optio sequi non nemo debitis enim quibusdam sapiente reprehenderit deleniti provident ea temporibus ratione, quo hic, pariatur eum autem vitae, earum voluptatem? Ducimus suscipit distinctio rerum aperiam? Voluptatum rem sit facere deleniti, tenetur maxime. Dolore illum veniam consectetur ullam obcaecati, consequuntur nihil magni dolorum laborum minima ipsum, impedit ipsam voluptatum voluptates, iure quos necessitatibus.</p>

                <h1>Desarrollando unos valores</h1>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, sapiente velit. Voluptatibus nulla incidunt dignissimos ullam asperiores, suscipit quae non unde doloribus aperiam. In quis molestiae recusandae unde iusto ex doloribus sed excepturi sint, mollitia quam dicta tenetur aliquid maiores quod officia, quia suscipit sapiente sequi assumenda odio consectetur deleniti, provident expedita. Nam natus ipsam ut maiores, nobis quod libero! Aliquam ipsam accusantium fuga iusto ab delectus qui officia esse repellat, ratione debitis deserunt cupiditate quos! Aliquid corporis ipsam dolor sit nihil sunt quam nisi nulla, ea blanditiis, eos repudiandae officiis quia. Iste explicabo fugit dolore eos eius minus id iure blanditiis, soluta, mollitia ipsam, consequuntur voluptas odit reprehenderit repellendus dolorum veritatis! Amet magni asperiores harum, minima quod nemo quisquam optio minus fugiat omnis itaque? Fugiat doloremque, molestias laudantium iste aut repellendus. Quidem corporis placeat consequatur incidunt dolorum id! Optio ab error sapiente asperiores consectetur quos, enim culpa voluptates tenetur et similique blanditiis aut debitis ea. Repellendus itaque asperiores tempore. Unde quae, inventore quibusdam reiciendis consequuntur facere magnam deserunt repellat possimus iure fugit in numquam, quam similique ea cumque voluptatibus accusantium atque optio at ullam velit quis, perspiciatis doloribus! Suscipit animi libero ducimus explicabo hic error eveniet. Sapiente, ex quis!</p>

                <img src="img/DSC_9147.jpg" alt="Club Ciclista Ballester posando">

                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et tempora quas temporibus, neque libero vitae nam! Hic similique voluptatum error molestiae est magnam numquam officia eos officiis, tempora inventore unde omnis molestias corrupti, labore consequatur dolorum debitis iste culpa, odit voluptatem non libero! Nam repudiandae assumenda enim obcaecati minus sint adipisci commodi, ex numquam debitis libero esse aperiam laborum autem accusantium ad. Exercitationem, repudiandae doloribus est quae blanditiis soluta nam et distinctio incidunt aut illo veniam atque sapiente totam eum vel odio, iusto velit. Minus doloribus sint illo officia aliquid vel. Non doloremque odit, fugiat error blanditiis soluta nostrum veniam?</p>

                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui ratione earum ipsum vel sit fugiat, harum quidem laboriosam veritatis placeat aperiam rem beatae commodi enim sapiente est natus consequatur asperiores. Ratione distinctio blanditiis aut similique adipisci fugiat sequi praesentium esse? Eius, architecto est nisi quae eligendi voluptas et aspernatur debitis optio corporis, cumque sit aliquid quam sunt inventore consequatur, soluta fugiat reprehenderit nostrum assumenda delectus esse aliquam voluptate. Eligendi, aut? Cupiditate omnis repudiandae quasi, quod voluptas sequi itaque saepe sint impedit nisi blanditiis laudantium cum dicta rerum totam magnam. Ducimus totam voluptas error eos pariatur culpa quibusdam alias accusamus perferendis!</p>

                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non nam laudantium architecto laboriosam. Nihil sunt saepe voluptatem incidunt delectus? Nisi commodi, quasi optio perferendis distinctio iste natus voluptate rerum ullam molestias eligendi iusto, odit excepturi ex, autem ad sapiente? Dolores tempore inventore minus voluptatibus tempora! Natus quos animi excepturi sed quidem sunt labore recusandae obcaecati adipisci ipsum a ex laboriosam hic architecto dolorum quo repellendus consequatur doloremque quia laudantium, quod culpa illo! Rem qui quibusdam deleniti aliquam ut quae sit ipsum cupiditate quasi quo voluptas adipisci ipsa veniam recusandae nihil labore dolorum esse, quia autem, quod consequuntur quam! Dolor, ipsa perferendis est quasi architecto rem quisquam! Eveniet quam quibusdam officia ullam exercitationem eos quae? Aliquid, consequuntur ipsa voluptatum cum illum, quibusdam quis tenetur id pariatur autem magni provident maiores adipisci quos eos doloribus aspernatur. Esse eligendi exercitationem consectetur deleniti distinctio earum? Quos ea error ratione. Magni molestias eum rem modi!</p>

                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur natus non amet sapiente hic, minima cum labore quis voluptate quibusdam odit esse quisquam, velit totam. Fugit minima, dolor dicta explicabo ad aliquid nemo quibusdam eos voluptatum delectus? Perferendis maiores, distinctio, excepturi mollitia laborum voluptatum rerum autem hic pariatur non iure.</P>

        </article>

        <!--Artículos relacionados-->
        <div class="container-aside">

            <!--aside 1-->
            <aside>
                <img src="img/act_educativas/DSC_1216.jpg" alt="actividad educativa">
                <h2>Actividades educativas</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus in nulla perspiciatis deleniti! Dicta consequuntur, fuga adipisci quam magnam molestias. Voluptatibus autem hic dolor perferendis?</p>

                <!--Botón para abrir un artículo-->
                <a href=""><button>Leer más</button></a>
            </aside>

            <!--aside 2-->
            <aside>
                <img src="img/DSC_8191.jpg" alt="grupo Ballester">
                <h2>Título del artículo</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus in nulla perspiciatis deleniti! Dicta consequuntur, fuga adipisci quam magnam molestias. Voluptatibus autem hic dolor perferendis?</p>

                <!--Botón para abrir un artículo-->
                <a href=""><button>Leer más</button></a>
            </aside>

            <!--aside 3-->
            <aside>
                <img src="img/DSC_7372.jpg" alt="ruedas bicicleta">
                <h2>Título del artículo</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus in nulla perspiciatis deleniti! Dicta consequuntur, fuga adipisci quam magnam molestias. Voluptatibus autem hic dolor perferendis?</p>

                <!--Botón para abrir un artículo-->
                <a href=""><button>Leer más</button></a>
            </aside>
            <!--aside 4-->
            <aside>
                <img src="img/DSC_7264.jpg" alt="circuito mountainbike">
                <h2>Título del artículo</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus in nulla perspiciatis deleniti! Dicta consequuntur, fuga adipisci quam magnam molestias. Voluptatibus autem hic dolor perferendis?</p>

                <!--Botón para abrir un artículo-->
                <a href=""><button>Leer más</button></a>
            </aside>

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

</body>
</html>