<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Mascota</title>
    <link rel="stylesheet" href="editar_mascota.css">

</head>
<body>
    <h2>Editar Mascota</h2>
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

    $sql = "SELECT * FROM mascotas WHERE codigo='$codigo'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
        <form action="actualizar_mascota.php" method="post">
            <input type="hidden" name="codigo" value="<?php echo $row['codigo']; ?>">
            Nombre: <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>"><br>
            Tipo: <input type="text" name="tipo" value="<?php echo $row['tipo']; ?>"><br>
            Sexo: <select id="sexo" name="sexo" required>
                <option value="Hembra" <?php if($row['sexo'] == 'Hembra') echo 'selected'; ?>>Hembra</option>
                <option value="Macho" <?php if($row['sexo'] == 'Macho') echo 'selected'; ?>>Macho</option>
            </select><br>
            Fecha de Nacimiento: <input type="date" name="fecha_nac" value="<?php echo $row['fecha_nac']; ?>"><br>
            <input type="submit" value="Actualizar">
        </form>
        <?php
    } else {
        echo "No se encontró la mascota.";
    }

    $conn->close();
    ?>
</body>
</html>
