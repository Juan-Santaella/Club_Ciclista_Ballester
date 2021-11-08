
<!--Mostramos el usuario y el rol que tiene si está iniciada la sesión-->

<div class="container_usr">
    <p class="usr_name"><?php echo $_SESSION['usuario']?></p>
    <p class="usr_kind"><?php echo $_SESSION['rol_user']?></p>
    <a href="../includes/cerrar_sesion.php"><i class="fas fa-power-off icon-start-header"></i></a>
    <h5> Cerrar sesión</h5>
</div>

