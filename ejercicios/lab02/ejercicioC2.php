<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


    $text = <<< EOT
        Hay dos palabras que te abrirán muchas puertas:
        Tire y Empuje.
    EOT;
    $text_length = strlen($text);
    for ($i = 0; $i < $text_length; $i++) {
        echo $text[$i] . "<br />";
     }
    ?>
</body>
</html>