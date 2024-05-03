<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="arbol.css">


</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="arbol.css">
</head>
<body>
<div class="arbol-container">
    <?php
    
class Nodo {
    public $valor;
    public $izquierda;
    public $derecha;

    public function __construct($valor) {
        $this->valor = $valor;
        $this->izquierda = null;
        $this->derecha = null;
    }
}

class ArbolBinario {
    protected $raiz;

    public function __construct() {
        $this->raiz = null;
    }

    public function agregar($valor) {
        $nuevoNodo = new Nodo($valor);
        if ($this->raiz === null) {
            $this->raiz = $nuevoNodo;
        } else {
            $this->agregarNodo($this->raiz, $nuevoNodo);
        }
    }

    protected function agregarNodo(&$raiz, &$nuevoNodo) {
        if ($raiz === null) {
            $raiz = $nuevoNodo;
        } else {
            if ($nuevoNodo->valor < $raiz->valor) {
                $this->agregarNodo($raiz->izquierda, $nuevoNodo);
            } else {
                $this->agregarNodo($raiz->derecha, $nuevoNodo);
            }
        }
    }

    public function getRaiz() {
        return $this->raiz;
    }
}

// Ejemplo de uso
$arbol = new ArbolBinario();
$arbol->agregar(10);
$arbol->agregar(5);
$arbol->agregar(15);

$raiz = $arbol->getRaiz();
echo '<div class="recuadro1">Raíz: ' . $raiz->valor . '</div>';
echo '<div class="recuadro2">Izquierda: ' . $raiz->izquierda->valor . '</div>';
echo '<div class="recuadro3">Derecha: ' . $raiz->derecha->valor . '</div>';

$arbol = new ArbolBinario();
$arbol->agregar(15);
$arbol->agregar(10); 
$arbol->agregar(20); 

$raiz = $arbol->getRaiz();
echo '<div class="recuadro4">Raíz: ' . $raiz->valor . '</div>';
echo '<div class="recuadro5">Izquierda: ' . $raiz->izquierda->valor . '</div>';
echo '<div class="recuadro6">Derecha: ' . $raiz->derecha->valor . '</div>';
?>
</div>
</body>
</html>
