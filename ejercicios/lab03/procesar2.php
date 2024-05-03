<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar Formulario</title>
</head>
<body>
    <h2>Datos enviados desde el formulario:</h2>
    <?php

        $nombre = $_POST['nombre'] ?? '';
        $email = $_POST['gmail'] ?? '';
        $telefono = $_POST['Telefono'] ?? '';

    // Funciones para validar 
    function validarNombre($nombre) {
        if (empty($nombre)) {
            return "Falta el campo Nombre , es requerido";
        }
    }
    function validarEmail($email) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return "El correo electrónico ingresado no es válido";
        }
    }
    function validarTelefono($telefono) {
        if (!preg_match("/^\d{9}$/", $telefono)) {
            return "El teléfono ingresado no es válido";
        }
    }

    // Validar los datos
    $errores = [];
    $errores[] = validarNombre($nombre);
    $errores[] = validarEmail($email);
    $errores[] = validarTelefono($telefono);

    // Mostrar los datos o errores
    if (empty(array_filter($errores))) {
        echo "<p><strong>Nombre:</strong> $nombre</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Teléfono:</strong> $telefono</p>";
    } else {
        foreach (array_filter($errores) as $error) {
            echo "$error"."<br>";
        }
    }
    ?>
    <a href="formulario2.html">Volver al formulario</a>
</body>
</html>
