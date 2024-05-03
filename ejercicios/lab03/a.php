<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulario de Contacto</title>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<h2>defacebook</h2>
<form action="procesar_formulario.php" method="post">
    <label for="nombre">Nombre:</label><br>
    <input type="text" id="nombre" name="nombre" required><br><br>
    
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>
    
    <label for="telefono">Teléfono:</label><br>
    <input type="tel" id="telefono" name="telefono" required><br><br>
    
    <input type="submit" value="registrate">
</form>
</body>
</html>
