<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos_lista_vehiculos.css">
</head>
<body>


<?php
// 1. Conectar al servidor
$conexion = new mysqli("localhost", "root", "", "db01");

// Verificar conexión
if ($conexion->connect_error) {
    die("La conexión falló: " . $conexion->connect_error);
}

// 2. Ejecutar consulta SQL
$stmt = $conexion->prepare("SELECT * FROM vehiculo");
$stmt->execute();
$resultado = $stmt->get_result();

// 3. Visualizar / procesar los datos
echo "<br><a class='boton' href='FormVehiculos.html'>Nuevo vehiculo</a>";
echo "<table border='1'><tr><th>Placa</th><th>Modelo</th><th>Marca</th><th>Año</th></tr>";

while ($fila = $resultado->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($fila['placa']) . "</td>";
    echo "<td>" . htmlspecialchars($fila['modelo']) . "</td>";
    echo "<td>" . htmlspecialchars($fila['marca']) . "</td>";
    echo "<td>" . htmlspecialchars($fila['anio']) . "</td>";
    echo "<td><a class='boton' href='editar.php?placa=" . urlencode($fila['placa']) . "'>Editar</a></td>";
    echo "<td><a class='boton' href='eliminar.php?placa=" . urlencode($fila['placa']) . "'>Eliminar</a></td>";
    echo "</tr>";
}
echo "</table>";

// 4. Cerrar conexión
$conexion->close();
?>
</body>
</html>
