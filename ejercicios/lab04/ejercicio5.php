<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

class SimpleArray {
    private $elements = [];

    // Constructor to initialize the array with provided elements
    public function __construct($elements = []) {
        $this->elements = $elements;
    }

    // Method to add an element to the array
    public function add($element) {
        $this->elements[] = $element;
    }

    // Method to remove an element from the array by value
    public function remove($element) {
        $index = array_search($element, $this->elements);
        if ($index !== false) {
            unset($this->elements[$index]);
        }
    }

    // Method to check if an element exists in the array
    public function contains($element) {
        return in_array($element, $this->elements);
    }

    // Method to get the size of the array
    public function size() {
        return count($this->elements);
    }

    // Method to get all elements of the array
    public function getAll() {
        return $this->elements;
    }
}

$array = new SimpleArray([1, 2, 3, 4, 5]);

$array->add(6);
$array->remove(3);

echo "Element 2 exists?: " . ($array->contains(2) ? "Yes" : "No") . "<br />";
echo "Array size: " . $array->size() . "<br />";
echo "All elements in array: " . implode(", ", $array->getAll()) . "<br />";

?>

</body>
</html>