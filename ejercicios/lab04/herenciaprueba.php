<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

// Clase base: Vehículo
class Vehiculo {
    protected $marca;
    protected $modelo;

    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function getInfo() {
        return "Marca: " . $this->marca . ", Modelo: " . $this->modelo;
    }
}

// Clase derivada: Automóvil
class Automovil extends Vehiculo {
    private $puertas;

    public function __construct($marca, $modelo, $puertas) {
        parent::__construct($marca, $modelo);
        $this->puertas = $puertas;
    }

    public function getInfo() {
        return parent::getInfo() . ", Puertas: " . $this->puertas;
    }
}

// Clase derivada: Motocicleta
class Motocicleta extends Vehiculo {
    private $cilindrada;

    public function __construct($marca, $modelo, $cilindrada) {
        parent::__construct($marca, $modelo);
        $this->cilindrada = $cilindrada;
    }

    public function getInfo() {
        return parent::getInfo() . ", Cilindrada: " . $this->cilindrada;
    }
}

// Ejemplo de uso
$auto = new Automovil("Toyota", "Corolla", 4);
echo $auto->getInfo() . "<br>";

$moto = new Motocicleta("Honda", "CBR600RR", "600cc");
echo $moto->getInfo() . "<br>";

?>

</body>
</html>