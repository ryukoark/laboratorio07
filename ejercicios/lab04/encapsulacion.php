<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    class Coche {
    // Propiedades
    private $modelo;
    private $color;
    private $precio;

    // Constructor
    public function __construct($modelo, $color, $precio) {
        $this->modelo = $modelo;
        $this->color = $color;
        $this->precio = $precio;
    }

    // Métodos de obtención (getters)
    public function getModelo() {
        return $this->modelo;
    }

    public function getColor() {
        return $this->color;
    }

    public function getPrecio() {
        return $this->precio;
    }

    // Métodos de asignación (setters)
    public function setColor($color) {
        $this->color = $color;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }
}
// Crear un objeto de la clase Coche
$coche = new Coche("Toyota", "Azul", 20000);

// Acceder a las propiedades usando los métodos de obtención
echo "Modelo: " . $coche->getModelo() . "<br>"; // Salida: Modelo: Toyota
echo "Color: " . $coche->getColor() . "<br>"; // Salida: Color: Azul
echo "Precio: $" . $coche->getPrecio() . "<br>"; // Salida: Precio: $20000

?>
</body>
</html>