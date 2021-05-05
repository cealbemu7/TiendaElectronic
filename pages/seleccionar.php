 <?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "myDB";
$id = $_POST['id'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, firstname, lastname FROM MyGuests WHERE id=$id";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Nombre: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
        echo "No existe un registro con este id,
  <a href='form_insertar.html'>Inserte un registro</a>";
}

mysqli_close($conn);
?> 