<!DOCTYPE html>
<html lang="en">
<head>
  <title>Operaciones</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php

$tipo = $_POST['tipo'];
$a = $_POST['a'];
$b = $_POST['b'];

?>

<div class="container">
  <h1>Solución de la Operación</h1>
  <p>Observe aquí</p> 


<?php

switch ($tipo) {
	case 'suma':
		$s=$a+$b;
		echo "La suma es ".$s;
		break;
	case 'resta':
		$r=$a-$b;
		echo "La resta es ".$r;
		break;
	case 'multiplicacion':
		$m=$a*$b;
		echo "La multiplicación es ".$m;
		break;
	case 'division':
		$d=$a/$b;
		echo "La división es ".$d;
		break;
	
}


?>
  
</div>

</body>
</html>







