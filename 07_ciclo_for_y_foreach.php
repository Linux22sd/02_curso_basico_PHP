<?php
// El ciclo for se repetira un cierto numero de veces indicado se usa para iterar es un ciclo definido

for($i=0; $i<10; $i++){
    echo 'Iteracion ',$i.'<br>';
} 
echo '<br>';

//----------------------------------------------------------------------------------------------------
// Tambien se le pueden agregar otros valores ojo se separa con coma los valores semejantes

for($i=0, $e=0; $i<=10; $i++, $e+=2){
    echo 'I es igual a: '. $i . ' E es igual a: '. $e .'<br>';
}
echo '<br>';
//----------------------------------------------------------------------------------------------------
// Con el ciclo foreach permite recorrer un array sin indicarle el numero de iteraciones

$empresa = [
    "publicidad" => 'depto diseno',
    "network" => 'depto sistemas',
    "interfases" => 'depto programing'
];

foreach($empresa as $deptos=>$key){
    echo $deptos ." ". $key . '<br>';
}
echo '<br>';
// al igual que el if si solo tienes una sola linea de respuesta puedes evitar los corchetes
//----------------------------------------------------------------------------------------------------
// break y continue 
// con break al encontrarlo se sale del ciclo
foreach($empresa as $deptos=>$key){
    if($deptos == 'network'){
        echo $deptos ." ". $key . '<br>';
        break;
    }
   
}
echo '<br>';
// Con continue al encontrarlo solo evita ese ciclo perocontinua con los demas
foreach($empresa as $deptos=>$key){
    if($deptos == 'network'){
        continue;
    }
    echo $deptos ." ". $key . '<br>';
}

?> 