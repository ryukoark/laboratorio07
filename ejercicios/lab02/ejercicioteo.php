<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>por edad descuento</h1>
    <p>
    <?php
    $edad = 59;
    $precio = 100;

    if ($edad >= 60) {
        $preciofinal = $precio - ($precio * 0.1); 
        echo "El precio final con descuento es: $" . $preciofinal;
    } 
    else {
     $preciofinal = $precio;
        echo "No aplica descuento, su precio es: $" . $precio;
    }


    ?></p>
</body>
</html>