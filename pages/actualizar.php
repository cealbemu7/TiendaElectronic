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

$sql = "UPDATE MyGuests SET firstname='$n', lastname='$a', email='$e'  WHERE id='$i'";

if (mysqli_query($conn, $sql)) {
    echo "Información actualizada satisfactoriamente";
} else {
    echo "Error actualizando la información: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 