<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Nombre: " . htmlspecialchars($_POST['nombre']) . "<br>";
    echo "Edad: " . (int)$_POST['edad'];
}
?>
