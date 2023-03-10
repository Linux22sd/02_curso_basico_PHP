<?php
//Ordenando un array de menor a mayor usando el operador de nave espacial
//la funcion sort funcionaria mejor en este caso solo se usara como ejemplo practico
//pero la funcion usrt se usa mas en areeglos multidimensionales 

//-------------------------------------------------------------------------------------------
// funcion usort()
$numeros = [3,5,7,3,5,1,8,4,6];
usort($numeros, function ($a, $b){
    return $a <=> $b;
});

echo '<pre>';
print_r($numeros);
echo '</pre>';

//-------------------------------------------------------------------------------------------
// Se puede observar que con la funcion sort() da mejor resultado en este array 
// funcion sort()
$numeros1 = [4,6,2,8,5,9,0,3,10,7];
sort($numeros1);

echo '<pre>';
print_r($numeros1);
echo '</pre>';
?>