<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cuadro de 3 columnas en HTML</title>
<link rel="stylesheet" href="cssejercicio4.css" type="text/css">

</head>
<body>
<?php

class Persona {

    public $estudiante;
    public $curso;
    public $nota;

    public function __construct($estudiante,$curso,$nota) {
        $this->estudiante = $estudiante;
        $this->curso = $curso;
        $this->nota = $nota;
    }
    
    public function mostrarInformacion() {
      echo "Nombre: " . $this->estudiante . ", curso: " . $this->curso . ", nota: " . $this->nota;
  }
  
}

?>
<div class="row">
  <div class="columna">
    <?php
        $persona1 = new Persona("Juan","matematica",16);
        $persona1->mostrarInformacion();
     ?>
  </div>
  <div class="columna">
    <?php 
        $persona2 = new Persona("Juan","comunicacion",16);
        $persona2->mostrarInformacion();
    ?>
  </div>
  <div class="columna">
    <?php 
        $persona3 = new Persona("Juan","ciencia y ambiente ",16);
        $persona3->mostrarInformacion();
    ?>
  </div>
</div>

</body>
</html>
