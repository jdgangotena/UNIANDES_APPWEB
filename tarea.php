<?php
// a. Declaración de Variables:
$integerVar = 10;
$floatVar = 15.75;
$stringVar = "Hola, soy David Gangotena!";
$booleanVar = true;
$arrayVar = array("manzana", "naranja", "plátano", "pera", "uva");

// b. Operaciones Aritméticas:
$sum = $integerVar + $floatVar;
$product = $integerVar * $floatVar;
echo "La suma de $integerVar y $floatVar es: " . $sum . "<br>";
echo "El producto de $integerVar y $floatVar es: " . $product . "<br>";

// c. Manipulación de Cadenas:
$additionalString = " Soy estudiante de Ing. de Software en UNIANDES";
$concatenatedString = $stringVar . $additionalString;
echo "Cadena concatenada: " . $concatenatedString . "<br>";
echo "Longitud de la cadena concatenada: " . strlen($concatenatedString) . "<br>";

// d. Uso de Condicionales:
if ($booleanVar) {
    echo "La variable booleana es verdadera.<br>";
} else {
    echo "La variable booleana es falsa.<br>";
}

// e. Creación de un Array:
echo "El segundo elemento del arreglo es: " . $arrayVar[1] . "<br>";
?>
