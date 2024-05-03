<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php
        

        $numero = 10; 
        
        $refNumero = &$numero;
        
        $numero = 20;
        
        echo $refNumero;
        
        ?>

    </h1>
</body>
</html>