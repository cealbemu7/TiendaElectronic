<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Login</h2>
 
  <div class="alert alert-info">
    <strong>Atención!</strong> Por favor auntentique su ingreso!


<?php
require('config.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['user'])){
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE user='$user'
and pass='".md5($pass)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
	    $_SESSION['start'] = time();
	    $_SESSION['expire'] = $_SESSION['start'] + (3600);
            // Redirect user to index.php
	    header("Location: index.php");
         }else{
	echo "<div class='form'>
<h3>Username/password incorrectos.</h3>
<br/>Click aquí <a href='login.php'>Login</a></div>";
	}
    }else{
?>
<div class="form">
<form action="" method="POST" name="login">
<input type="text" name="user" placeholder="Username" required />
<input type="password" name="pass" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
</form>
<p>No está registrado? <a href='registration.php'>Registrese aquí</a></p>
<p>Consulte si ya esta registrado su ID? <a href='validaruser.html'>Valide su ID de usuario</a></p>
</div>
<?php } ?>





  </div>

</div>

</body>
</html>













