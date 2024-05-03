<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php
     echo "la fecha de hoy es: " . date("Y-m-d") . "<br>";
     echo "la hora es: ". date("H:i:s"). "<br>";
     setlocale(LC_TIME, 'es_ES.UTF-8');
     echo "Hoy es: " . strftime("%A");
        ?>
    </h1>
</body>
</html>