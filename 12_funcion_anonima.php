<?php
//Ordenando un array de menor a mayor usando el operador de nave espacial
$numeros = [3,5,7,3,5,1,8,4,6];
usort($numeros, function ($a, $b){
    return $a <=> $b;
});

echo '<pre>';
print_r($numeros);
echo '</pre>';
?>