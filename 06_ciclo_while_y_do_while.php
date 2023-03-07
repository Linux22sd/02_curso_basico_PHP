<?php
// el ciclo while es un bloque que se repite cierto numero de veces 
// Tablas de multiplicar

$tabla = 12;
$number = 0;
echo 'Tabla del '.$tabla.'<br><br>';

while($number < 12){
    echo "$tabla x $number = " . $tabla * $number . '<br>';
    $number++;
};
echo '<br>';

// El ciclo do while es similar al ciclo while la diferencia es que ejecuta un bloque de codigo
// al comienzo del ciclo al menos una vez

$num_indicado = 5;
$contador = 0;
do{
    if($contador == 0){
        echo 'Este ciclo se repetira el numero de veces qu le indiques:'.'<br><br>';
    }else{
        echo 'Impresion numero '.$contador.'<br>';
    }
    $contador++;
}
while($contador <= $num_indicado);

//Ejemplo 2 en consola
$users = ['Luis', 'Pedro', 'Juan'];
do{
    $user_name = readline('Nombre de usuario: ');

}
while(in_array($user_name, $users));
?>
