<?php

function operacion ($op, $num1, $num2){
    $result = null;
    switch($op){
        case 'suma':
            $resultado = $num1 + $num2;
            $result = "El resultado de la suma de $num1 + $num2 e igual a $resultado <br>";
            break;
        case 'resta':
            $resultado = $num1 - $num2;
            $result = "El resultado de la resta de $num1 - $num2 e igual a $resultado <br>";
            break;
        case 'multiplicacion':
            $resultado = $num1 * $num2;
            $result = "El resultado de la multiplicacion de $num1 x $num2 e igual a $resultado <br>";
            break;
        case 'division':
            $resultado = $num1 / $num2;
            $result = "El resultado de la division de $num1 / $num2 e igual a $resultado <br>";
            break;
        default:
            $result = "Algo salio mal verifica que los argumentos que mandaste sean correctos <br>";
        break;
    }
    return $result;

}

echo operacion('suma', 10, 15);
echo operacion('resta', 10, 5);
echo operacion('multiplicacion', 2, 8);
echo operacion('division', 10, 5);
?>