<?php
/**
 * count($array)
 * array_push($array, valor (s))
 * array_sum($array)
 * array_pop($array)
 * array_unshift($array, valor(s))
 * array_shift($array)
 * is_array($array)
 * explode('separador', cadena)
 * implode('separador', $array)
 * array_rand()
 * rand()
 * array_merge($array1, $array2)
 * [...$array1, ...$array2]
 */

$edades = [ 18, 22, 32, 34];

// funcion (  count()  ) nos dice la cantidad de elementos que estan dentro de un array
echo 'La cantidad de elementos dentro del array $edades es de: '.count($edades).' elementos';
//-------------------------------------------------------------------------------------------
// funcion (  array_push()  ) Nos permite agregar elementos al array al final de este
array_push($edades, 45,35);
echo '<pre>';
print_r($edades);
echo '</pre>';
//-------------------------------------------------------------------------------------------
// funcion (  array_unshift()  ) Nos permite agregar elementos al array al principio de este
array_unshift($edades, 65,56);
echo '<pre>';
print_r($edades);
echo '</pre>';
//-------------------------------------------------------------------------------------------
// funcion (  array_sum()  ) Nos permite sumar y obtener el total de llos numeros dentro de un array
$suma = array_sum($edades);
echo "La suma de los elementos del array es: $suma";
//-------------------------------------------------------------------------------------------
// funcion (  array_pop()  ) Nos permite borrar el ultimo elemento del array
array_pop($edades);
echo '<pre>';
print_r($edades);
echo '</pre>';
//-------------------------------------------------------------------------------------------
// funcion (  array_shift()  ) Nos permite borrar el primer elemento del array
array_shift($edades);
echo '<pre>';
print_r($edades);
echo '</pre>';
//-------------------------------------------------------------------------------------------
// funcion (  is_array() ) Retorna true o false si es o no un array
var_dump(is_array($edades));
echo '<br>';
//-------------------------------------------------------------------------------------------
// funcion (   explode()  ) Convierte una cadena de texto a un array
$cadena = 'auto, casa, muebles';
$lista = explode(',', $cadena);
echo '<pre>';
print_r($lista);
echo '</pre>';
//-------------------------------------------------------------------------------------------
// funcion (   implode()  ) Convierte un array en una cadena de texto
$cadena2 = implode(',', $lista);
echo $cadena2 , '<br><br>';
//-------------------------------------------------------------------------------------------
// funcion (   array_rand(array)  ) retorna un indice random del array 
$array_nombres = ['Luis', 'Pedro', 'Juan'];
$rand_nom = array_rand($array_nombres);
echo $array_nombres[$rand_nom] . '<br><br>';

// la funcion rand() retornara un numero random dentro del rango dado como argumentos
$rand_num = rand(1, 20);
echo $rand_num .'<br>';
//-------------------------------------------------------------------------------------------
// Para juntar dos arreglos o arrays se puede hacer de varias maneras:

// con la funcion array_merge
$array_nom1 = ['Luis', 'Pedro', 'Juan'];
$array_nom2 = ['Maria', 'Lucia', 'Pancha'];

$array_mix1 = array_merge($array_nom1, $array_nom2);
echo '<pre>';
print_r($array_mix1);
echo '</pre>';

// con array unpacking ...$array
$array_nom3 = ['Alejandro', 'Martin', 'Eliseo'];
$array_nom4 = ['Ana', 'Rosa', 'Lencha'];

$array_mix2 = [...$array_nom3, ...$array_nom4];
echo '<pre>';
print_r($array_mix2);
echo '</pre>';
//-------------------------------------------------------------------------------------------


?>