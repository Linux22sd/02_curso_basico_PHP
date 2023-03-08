<?php
// array con el nombre de 3 departamentos
$deptos = ['network','design','programing'];

// funcion array_rand selecciona un indice aleatorio del array
$depto = array_rand($deptos);

//funcion que recibe un parametro aleatorio y un switch imprime la respuesta
function department($deptos){
    switch($deptos){
        case 'network':
            echo 'Te encuentras en el departameno de network'.'<br>';
            break;
        case 'design':
            echo 'Te encuentras en el departameno de design'.'<br>';
            break;
        case 'programing':
            echo 'Te encuentras en el departameno de programing'.'<br>';
            break;
        default:
            echo 'Algo salio mal';
    }
};

// se manda a llamar a la funcion con el argumento aleatorio
department($deptos[$depto]);

?>