<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Define una clase simple llamada Person
class Person {
    // Propiedades (atributos) de la clase
    public $name;
    public $age;

    // Método constructor, llamado automáticamente cuando se crea un objeto
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // Método para saludar a la persona
    public function greet() {
        return "Hola, mi nombre es $this->name y tengo $this->age años.";
    }
}

// Creando un objeto (instancia) de la clase Person
$person1 = new Person("John", 30);

// Accediendo a las propiedades y métodos del objeto
echo $person1->name; // Salida: John
echo $person1->age; // Salida: 30
echo $person1->greet(); // Salida: Hola, mi nombre es John y tengo 30 años.
?>
</body>
</html>