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
echo $cadena2;
//-------------------------------------------------------------------------------------------

?>