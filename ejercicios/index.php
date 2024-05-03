<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
</head>
<body>
    <h1>Bienvenido</h1>
    <p>
        <?php
        if(isset($_GET['nombre']) && isset($_GET['apellido'])) {
            $nombre = htmlspecialchars($_GET['nombre']);
            $apellido = htmlspecialchars($_GET['apellido']);
            echo "Hola, $nombre $apellido. ¡Bienvenido!";
        } else {
            echo "Error: Por favor proporciona tu nombre y apellido en la URL.";
        }
        ?>
    </p>
</body>
</html>

