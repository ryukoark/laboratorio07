<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos_editar.css">
</head>
<body>
    <?php
    $placa = $_GET['placa'];

    // Crear conexión
    $conexion = new mysqli("localhost", "root", "", "db01");
    if ($conexion->connect_error) {
        die("La conexión falló: " . $conexion->connect_error);
    }

    // Preparar la consulta
    $stmt = $conexion->prepare("SELECT * FROM vehiculo WHERE placa = ?");
    $stmt->bind_param("s", $placa);

    // Ejecutar y obtener resultados
    $stmt->execute();
    $resultado = $stmt->get_result();
    $vehiculo = $resultado->fetch_assoc();

    $stmt->close();
    $conexion->close();
    ?>
    <form method="post" action="modificar_vehiculo.php">
        Placa: <input name="xpl" size="10" value="<?php echo $vehiculo['placa']; ?>" readonly="readonly"/><br />
        Modelo: <input name="xmo" size="40" value="<?php echo $vehiculo['modelo']; ?>"/><br />
        Marca: <input name="xma" size="30" value="<?php echo $vehiculo['marca']; ?>"/><br />
        Año: <input name="xan" size="10" value="<?php echo $vehiculo['anio']; ?>"/><br />
    <input type="submit" value="Grabar Cambios" />
</form>
</body>
</html>