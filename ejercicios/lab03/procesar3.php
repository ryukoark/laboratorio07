<?php
$usuarios = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $edad = (int)$_POST['edad'];

    // Añadir el nuevo usuario al array
    $usuarios[] = ["nombre" => $nombre, "edad" => $edad];
}

// Mostrar todos los usuarios
echo "<h2>Usuarios Registrados</h2>";
foreach ($usuarios as $usuario) {
    echo "Nombre: " . $usuario['nombre'] . ", Edad: " . $usuario['edad'] . "<br>";
}
?>
