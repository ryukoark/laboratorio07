<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Mascotas</title>
    <link rel="stylesheet" href="lista_mascotas.css">
</head>
<body>
    <h2>Lista de Mascotas</h2>
    <a class="button" href="FormMascotas.html">Agregar Nueva Mascota</a>
    <table border="1">
        <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Sexo</th>
            <th>Fecha de Nacimiento</th>
            <th>Acciones</th>
        </tr>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "db02"; // Nombre de la base de datos

        // Crear conexión
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar conexión
        if ($conn->connect_error) {
            die("La conexión falló: " . $conn->connect_error);
        }

        // Obtener todas las mascotas de la base de datos
        $sql = "SELECT * FROM mascotas";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Mostrar cada mascota en una fila de la tabla
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["codigo"] . "</td>";
                echo "<td>" . $row["nombre"] . "</td>";
                echo "<td>" . $row["tipo"] . "</td>";
                echo "<td>" . $row["sexo"] . "</td>";
                echo "<td>" . $row["fecha_nac"] . "</td>";
                echo "<td><a class='button' href='editar_mascota.php?codigo=" . $row["codigo"] . "'>Editar</a>";
                echo "<a class='button' href='eliminar_mascota.php?codigo=" . $row["codigo"] . "'>Eliminar</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>0 resultados</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>
