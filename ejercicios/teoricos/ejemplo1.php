<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

class Persona {

    public $nombre;
    public $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    

    public function mostrarInformacion() {
        echo "Nombre: " . $this->nombre . ", Edad: " . $this->edad . " años";
    }
}


$persona1 = new Persona("Juan", 30);
$persona2 = new Persona("María", 25);


$persona1->mostrarInformacion();
echo "<br>";
$persona2->mostrarInformacion();

?>

</body>
</html>