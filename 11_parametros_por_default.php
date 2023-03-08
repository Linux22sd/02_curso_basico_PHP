<?php
//--------------------------------------------------------------------------------------------
// Prametros por default 
// Aqui con el operador = podemos darle un valor por default a nuestros parametros
// en caso que al ser llamada la funcion no se le den argumentos asino producira error

function suma($num1=0, $num2=0){
    $result = $num1 + $num2;
    return $result;
};
echo 'Parametros por default:' . '<br><br>';
echo 'Suma sin dar argumentos ' . suma() .'<br>';
echo 'Suma solo con un argumento ' . suma(2) .'<br>';
echo 'Suma con dos argumentos ' . suma(2,2) .'<br><br>';
//--------------------------------------------------------------------------------------------
//Usando array unpacking como parametros como argumentos y como parametros y argumentos

// como parametros:
function adicion(...$nums){
    $base = 0;
    foreach($nums as $nu){
        $base += $nu;
    }
    return $base;
}
echo 'Unpaking como parametros:' . '<br><br>';
echo 'Suma de 6 valores ' . adicion(9, 2, 4, 5, 7, 8) . '<br>';
echo 'Suma de 4 valores ' . adicion(5, 4, 5, 8) . '<br><br>';
//=============================================
// como argumentos:
$numeros = [9, 8];

function multiplicacion($num1 , $num2){
    return $num1 * $num2;
}
echo 'Unpaking como argumentos:' . '<br><br>';
echo 'Multiplicacion de 2 valores ' . multiplicacion(...$numeros) . '<br><br>';
//=============================================
// como argumentos y parametros:
$numeros1 = [9, 2];
$numeros2 = [4, 5, 7, 8, 4];

function adicion2(...$values){
    $base2 = 0;
    foreach($values as $nu2){
        $base2 += $nu2;
    }
    return $base2;
}
echo 'Unpaking como parametros y argumentos:' . '<br><br>';
echo 'Suma de 2 valores ' . adicion2(...$numeros1) . '<br>';
echo 'Suma de 5 valores ' . adicion2(...$numeros2) . '<br>';
//--------------------------------------------------------------------------------------------
?>