<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $cursos = ['PHP', 'Laravel', 'React', 'Vue'];
    
    foreach ($cursos as $indice => $curso) {
    echo $indice."|".$curso . '<br/>';
    }
    ?>
</body>
</html>