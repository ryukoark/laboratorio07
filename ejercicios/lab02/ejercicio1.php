<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="estilos1.css">

</head>
<body>
<h1>ejercicio 1</h1>
    <p>
        <?php
         $score =50;
         echo "Tu puntuacion es ",$score;
    ?>
    </p>
    <p>
        <?php
        if ($score >= 80 ){
            echo "¡ excelente !" ;
        } elseif ($score >= 60){
            echo "Bueno";
        } else {
            echo"mejor suerte la proxima vez";
        }

        ?>
    </p>
</body>
</html>
