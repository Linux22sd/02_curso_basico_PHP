<?php
// Los condicionales nos ayudan a decidir si algo es verdadero se ejecutara algo y si es falso otra cosa 
$edad = 18;
$color = 'azul';

if($edad >= 18){
    echo "El usuario es mayor de edad".'<br>';
}
else{
    echo "El usuario no es mayor de edad".'<br>';
}

//Cuando solo existe una sola line ade codigo en el condicional se pueden quitar los corchetes
if($color == 'azul')
    echo "El color es azul".'<br>';
else
    echo "El color no es azul".'<br>';

// Si lo que estamos evaluando requiere de evaluar dos o mas condiciones entonces usamos (elseif)
$auto = 'compacto';

if($auto == 'mediano'){
    echo 'El auto es mediano'.'<br>';
}
elseif($auto == 'compacto'){
    echo 'El auto es compacto'.'<br>';
}
elseif($auto == 'grande'){
    echo 'El auto es grande'.'<br>';
}
else{
    echo 'No aplicable'.'<br>';
}
?>
