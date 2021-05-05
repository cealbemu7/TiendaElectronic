<?php
    $conexion= new mysqli('localhost','root','12345678','mydb');
    $id = $_POST['id'];
    $consulta = "SELECT * FROM users WHERE id = $id";
    $result = $conexion->query($consulta);

    if( $result->num_rows > 0)
    {
        echo 1;
        echo "<br>";
        echo "Usted esta registrado";
      }
    else
    {
        echo 0;
        echo "<br>";
        echo "Usted no esta registrado";
      }
?>