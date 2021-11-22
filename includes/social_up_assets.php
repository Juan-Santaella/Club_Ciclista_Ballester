
<?php
    //Si no existe una sesión iniciada, la iniciamos
    if(!isset($_SESSION['usuario'])){
        session_start();
    }
?>

<!-- Social bar superior -->

<!--Cabecera con logo e iconos de redes sociales-->
<div class="container-social-top">

    <div class="logo-top">
        <a href="../index.php"><img src="../img/logo.png" alt="Club Ciclista Ballester"></a>
    </div>

    <a href="https://www.facebook.com/clubciclistaballester.azucareraespanola" target="none"><i class="fab fa-facebook-square icon-redes-header"></i></a>
    <a href="#"><i class="fab fa-twitter-square icon-redes-header"></i></a>
    <a href="https://www.instagram.com/club_ciclista_ballester/" target="none"><i class="fab fa-instagram-square icon-redes-header"></i></a>
    <a href="https://www.youtube.com/results?search_query=club+ciclista+ballester" target="none"><i class="fab fa-youtube-square icon-redes-header"></i></a>

    <?php
        //Si existe una sesión iniciada, nos presenta el nombre del usuario conectado y su rol
        if(isset($_SESSION['usuario'])){
            include "social_up_s_assets.php";
        }
    ?>
    
</div>