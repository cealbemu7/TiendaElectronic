<?php
require('config.php');
include("auth.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Aplicativo mantenimiento PC UNAD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.html">Aplicativo mantenimiento PC UNAD</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.html">Home</a></li>
      <li><a href="pages/estructuras.html">Estructuras de programación</a></li>
      <li><a href="pages/form_insertar.html">Ingreso de usuarios</a></li>
      <li><a href="pages/form_seleccionar.html">Consulta de usuarios</a></li>
      <li><a href="pages/form_actualizar.html">Actualización de usuarios</a></li>
      <li><a href="pages/form_eliminar.html">Eliminación de usuarios</a></li>
      <li><a href="pages/bd.html">Administración</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3>Aplicativo Mantenimiento de Computadores</h3>
  <p>Este aplicativo esta destinado a verificar y registrar el mantenimiento de los computadores de la UNAD.</p>
   <img src="imagenes/computador.jpg" class="img-rounded" alt="Computador" width="500" height="400">
</div>

</body>
</html>
