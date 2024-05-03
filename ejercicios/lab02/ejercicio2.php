<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos2.css">
    <title>Estructuras repetitivas</title>
</head>
<body>
    <?php
    if ($_GET["status"] == "success") {
    ?>
        <div class = "success">
    <?php }elseif ($_GET["status"] == "error"){
    ?>
        <div class = "error">
    <?php }elseif ($_GET["status"] == "warning"){
    ?>    
        <div class = "warning">
    <?php }else {
    ?>  
        <div class = "info">
    <?php
    }
    ?>
        <h3><?php echo $_GET["message"];?></h3>
    
    </div>
</body>
</html>