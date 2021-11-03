<!-- Social bar superior -->

<!--Cabecera con logo e iconos de redes sociales-->
<div class="container-social-top">

    <div class="logo-top">
        <a href="../index.php"><img src="img_adm/logo.png" alt="Club Ciclista Ballester"></a>
        <!-- <img src="img/logo.png" alt="Logo Club Ciclista Ballester"> -->
    </div>

    <a href="https://www.facebook.com/clubciclistaballester.azucareraespanola" target="none"><i class="fab fa-facebook-square icon-redes-header"></i></a>
    <a href="#"><i class="fab fa-twitter-square icon-redes-header"></i></a>
    <a href="https://www.instagram.com/club_ciclista_ballester/" target="none"><i class="fab fa-instagram-square icon-redes-header"></i></a>
    <a href="https://www.youtube.com/results?search_query=club+ciclista+ballester" target="none"><i class="fab fa-youtube-square icon-redes-header"></i></a>

    <div class="container_usr">
        <p class="usr_name"><?php echo $_SESSION['usuario']?></p>
        <p class="usr_kind">Administrador</p>
        <a href="cerrar_sesion_adm.php"><i class="fas fa-power-off icon-start-header"></i></a>
        <h5> Cerrar sesión</h5>
    </div>

</div>