 <?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE MyGuests (
id INT(30) PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Tabla invitados creada satisfactoriamente";
} else {
    echo "Error creando tabla: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 