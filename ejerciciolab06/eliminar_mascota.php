<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db02"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

$codigo = $_GET['codigo'];

$sql = "DELETE FROM mascotas WHERE codigo='$codigo'";

if ($conn->query($sql) === TRUE) {
    echo "Mascota eliminada correctamente.";
    echo "<a href='lista_mascotas.php'>Ir a la lista de mascotas</a>";

} else {
    echo "Error al eliminar la mascota: " . $conn->error;
}

$conn->close();
?>
