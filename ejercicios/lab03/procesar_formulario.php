<?php
if(isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['telefono'])){
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Por favor ingrese un email válido.";
    } elseif (!preg_match("/^\d{9}$/", $telefono)) {
        echo "Por favor ingrese un número de teléfono válido de 9 dígitos.";
    } else {
        echo "Nombre: $nombre <br>";
        echo "Email: $email <br>";
        echo "Teléfono: $telefono <br>";
    }
} else {
    echo "Complete todos los campos del formulario.";
}
?>

