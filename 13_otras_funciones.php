<?php
// Funciones de strings
/**
 * trim($variable_con espacios );   espacios al principio y al final
 * ltrim($variable_con espacios );  espacios al principio
 * rtrim($variable_con espacios );  espacios al final
 * strtolower(string o variable)
 * strtoupper(string o variable)
 * rand(1, 10)
 * strlen(string o variable)
 * str_pad(string, length, indice)
 * str_contains(string, caracter)
 * strpos(string, caracter, indice de inicio)
 */

// funcion ltrim($variable);
echo "=====Quitando espacios:===== <br><br>";
$palabra = "\tHola\t";
$pal = trim($palabra);

var_dump($palabra);
echo "<br>";
var_dump($pal);
echo "<br><br>";
//----------------------------------------------------------------------------------------------
// funcion strtolower y strtoupper;
echo "======Convirtiendo string a mayusculas y minusculas======<br><br>";
// a minusculas:
$texto1 = "ESTE TEXTO ESTA EN MINUSCULAS<br>";
$texto_minusculas = strtolower($texto1);
echo $texto_minusculas;
echo "<br>";

// a mayusculas:
$texto2 = "este texto esta en mayusculas<br>";
$texto_mayusculas = strtoupper($texto2);
echo $texto_mayusculas;
echo "<br><br>";

// rand();
echo "======Obteniendo un numero random======<br><br>";
$numero = rand(1, 10);
echo $numero;
echo "<br>";

// tamano de un string;
echo "======Obteniendo la longitud de un string======<br><br>";
$texto3 = "hola mundo";
$longitud = strlen($texto3);
echo $longitud;
echo "<br><br>";

// agregar elementos a un string;
echo "======agregar elementos a un string======<br><br>";
$texto4 = "hola mundo";
$texto4_a = str_pad($texto4, 15, "_");
echo $texto4_a;
echo "<br>";

$texto5 = str_pad("", 10, "=");
echo $texto5;
echo "<br><br>";

// verificar si existe un caracter dentro de un string;
echo "======verificar si existe un caracter dentro de un string======<br><br>";
$verificar = str_contains($texto4, 'a');
var_dump($verificar);
echo "<br><br>";

// obtener el numero del index de un string;
echo "======obtener el numero del index de un string======<br><br>";
$pos = strpos($texto4, 'a', 0);
echo $pos;
echo "<br><br>";
?>