<?php

/**
 * The fibonacci Sequence
 * 0,1,1,2,3,5,8,13,21,34,55,89,144,233,377.................
 * la suma del primer digito con el segundo dara el tercero 
 * despues la suma del segundo con el tercero dara el cuarto 
 * y asi sucesivamente.
*/

$result = 1;

$num = 9;

for($i=1, $var=0; $i<$num; $i++){
    $result += $var;
    $var = $result - $var;
}
echo "Existen $result formas para llegar a la posicion $num";
?>