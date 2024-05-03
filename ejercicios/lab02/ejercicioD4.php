<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $opcion = 2;

        switch ($opcion) {
            case 1:
                echo "La opción es 1";
                break;
            case 2:
                echo "La opción es 2";
                break;
            case 3:
                echo "La opción es 3";
                break;
            default:
                echo "Opción no válida";
                break;
    }
    
    ?>
</body>
</html>
