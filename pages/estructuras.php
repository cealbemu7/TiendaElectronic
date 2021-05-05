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

echo "Estructura Switch Case"."<br>";

switch ($tipo) {
	case 'suma':
		$s=$a+$b;
		echo "La suma es ".$s." <br>";
		break;
	case 'resta':
		$r=$a-$b;
		echo "La resta es ".$r." <br>";
		break;
	case 'multiplicacion':
		$m=$a*$b;
		echo "La multiplicación es ".$m." <br>";
		break;
	case 'division':
		$d=$a/$b;
		echo "La división es ".$d." <br>";
		break;
	
}

echo "Ciclo If"."<br>";

if ($a==$b) {
	echo "El número ".$a." es igual al número ".$b." <br>";
}

if ($a>$b) {
	echo "El número ".$a." es mayor al número ".$b." <br>";
}

if ($a<$b) {
	echo "El número ".$a." es menor al número ".$b." <br>";
}

echo "Ciclo For"."<br>";

for ($a=$a; $a <= $b; $a++) { 
	echo "El número es ".$a." <br>";
}

echo "Ciclo While"."<br>";

$x=0;
$y=15;
while($x <= $y) {
    echo "El número es ".$x." <br>";
    $x++;
} 


?>
  
</div>

</body>
</html>







