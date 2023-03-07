<?php
// Estructuras de arreglos (Arrays)

//Array Simple

$array_simple = ['20','18', '40'];
echo '<pre>';
print_r($array_simple);
echo '</pre>';

//Para imprimir un indice en particular 

echo $array_simple[1];

// Tambien se puede declarar un array de esta forma

$array_simple2 = array ('30', '26', '19');

echo '<pre>';
print_r($array_simple2);
echo '</pre>';

echo $array_simple2[1];

// con esta forma es el mismo resultado se pueden usar cualquiera de las dos formas

// Array Asociativo

$array_asociativo = [
    'nombre' => 'Luis',
    'apellido' => 'Padilla'
];

echo '<pre>';
print_r($array_asociativo);
echo '</pre>';

echo $array_asociativo['nombre'];

// de la misma forma que con los arrays simples se pueden declarar de esta forma

$array_asociativo2 = array(
    'nombre' => 'Alejandro',
    'apellido' => 'Diaz'
);

echo '<pre>';
print_r($array_asociativo2);
echo '</pre>';

echo $array_asociativo2['nombre'];
?>
