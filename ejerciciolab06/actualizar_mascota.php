<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db02"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$tipo = $_POST['tipo'];
$sexo = $_POST['sexo'];
$fecha_nac = $_POST['fecha_nac'];

$sql = "UPDATE mascotas SET nombre='$nombre', tipo='$tipo', sexo='$sexo', fecha_nac='$fecha_nac' WHERE codigo='$codigo'";

if ($conn->query($sql) === TRUE) {
    echo "Mascota actualizada correctamente.";
    echo "<a href='lista_mascotas.php'>Ir a la lista de mascotas</a>";

} else {
    echo "Error al actualizar la mascota: " . $conn->error;
}

$conn->close();
?>
