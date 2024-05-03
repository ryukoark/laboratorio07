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
    $status = $_GET["status"];
    switch ($status) {
        case "success":
            $class = "success";
            break;
        case "error":
            $class = "error";
            break;
        case "warning":
            $class = "warning";
            break;
        default:
            $class = "info";
    }
    ?>
    <div class="<?php echo $class; ?>">
        <h3><?php echo $_GET["message"];?></h3>
    </div>
</body>
</html>