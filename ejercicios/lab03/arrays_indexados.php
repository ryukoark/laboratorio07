<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
    <?php
        $ciudades = ["Lima", "Madrid", "Tokio"];
        echo "La segunda ciudad es: " . $ciudades[1] . "<br>";

        // Añadir una ciudad
        $ciudades[] = "Paris";  
        echo "Ciudades después de añadir: " . implode(", ", $ciudades) . "<br>";

        // Eliminar la primera ciudad
        array_shift($ciudades);
        echo "Ciudades después de eliminar la primera: " . implode(", ", $ciudades) . "<br>";
    ?>

    </p>
</body>
</html>
