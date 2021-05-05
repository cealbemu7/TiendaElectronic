<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="alert alert-success">
    <strong>Atención!</strong> En este espacio puede registrar su nombre, email y contraseña

<?php
require('config.php');
date_default_timezone_set("America/Bogota");
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
    $user = $_POST['username'];
    $id = $_POST['id'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (id, user, pass, email)
VALUES ('$id', '$user', '".md5($pass)."', '$email')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>Su registro fue realizado satisfactoriamente.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Registro</h1>
<form name="registration" action="" method="POST">
  <input type="text" name="id" placeholder="id" required />
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php } ?>


  </div>
  
</div>

</body>
</html>
