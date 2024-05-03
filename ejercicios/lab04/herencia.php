<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

// Clase padre
class Animal {
    // Propiedades
    protected $nombre;
    protected $color;
    
    // Constructor
    public function __construct($nombre, $color) {
        $this->nombre = $nombre;
        $this->color = $color;
    }
    
    // Método
    public function comer($comida) {
        return "$this->nombre está comiendo $comida.";
    }
}

// Clase hija que hereda de Animal
class Perro extends Animal {
    private $raza;
    
    // Constructor
    public function __construct($nombre, $color, $raza) {
        parent::__construct($nombre, $color);
        $this->raza = $raza;
    }
    
    public function comer($comida) {
        return parent::comer($comida) . " ¡Guau!";
    }
    
    public function ladrar() {
        return "$this->nombre está ladrando!";
    }
}
$animal = new Animal("Animal", "Marrón");
$perro = new Perro("Buddy", "Negro", "Labrador");

// Accede a los métodos
echo $animal->comer("hierba") . "<br>"; // Salida: Animal está comiendo hierba.
echo $perro->comer("huesos") . "<br>"; // Salida: Buddy está comiendo huesos. ¡Guau!
echo $perro->ladrar() . "<br>"; // Salida: Buddy está ladrando!

?>
</body>
</html>