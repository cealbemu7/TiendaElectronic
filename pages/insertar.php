 <?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "myDB";

$i = $_POST['id'];
$n = $_POST['nombre'];
$a = $_POST['apellido'];
$e = $_POST['email'];


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO MyGuests (id, firstname, lastname, email)
VALUES ('$i', '$n', '$a', '$e')";

if (mysqli_query($conn, $sql)) {
    echo "Datos grabados satisfactoriamente";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 