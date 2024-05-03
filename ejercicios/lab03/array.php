<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $productos = ["Manzana" => 0.50, "Pan" => 1.00];
    echo "Precio de la Manzana: $" . $productos["Manzana"] . "<br>";

    // Añadir un nuevo producto
    $productos["Leche"] = 0.90;
    echo "Productos después de añadir: ";
    foreach ($productos as $producto => $precio) {
        echo "$producto - $" . $precio . ", ";
    }
    echo "<br>";    

    // Eliminar un producto
    unset($productos["Pan"]);
    echo "Productos después de eliminar el Pan: ";
    foreach ($productos as $producto => $precio) {
        echo "$producto - $" . $precio . ", ";
    }
?>
</body>
</html>