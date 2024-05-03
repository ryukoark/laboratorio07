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

$sql = "INSERT INTO mascotas (codigo, nombre, tipo, sexo, fecha_nac)
VALUES ('$codigo', '$nombre', '$tipo', '$sexo', '$fecha_nac')";

if ($conn->query($sql) === TRUE) {
    echo "Nueva mascota agregada correctamente. <br>";
    echo "<a href='lista_mascotas.php'>Ir a la lista de mascotas</a>";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
