<?php
    $conexion=mysqli_connect("localhost","root","","ballester");

    //Comprobar si no hay errores en la conexión con la BD
    if($conexion){
        echo "Conectado correctamente a la Base de Datos";
    }else{
        echo "No se ha podido conectar a la Base de Datos";
    }
?>





<!--<?php
   /*$servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "ballester";
 

  // Crea la Conexión
  $conexion = mysqli_connect($servername, $username, $password, $dbname);

  /* Verifica la Conexión
  if (!$conexion) {
    die("La Conexión ha fallado: " . mysqli_connect_error());
  }else{
    echo "Conexión exitosa <br>";
  }
  //La conexión se cerrará automáticamente cuando finalice el script. 
  //Para cerrar la conexión antes, usa: mysqli_close($conexion);*/
  
?>-->