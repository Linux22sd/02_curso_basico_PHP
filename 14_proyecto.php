<?php
//juego del ahorcado

function print_value($value){
    $ventana = [
        '0' =>  " ___________ \n",
        '1' =>  "|     |     |\n",
        '2' =>  "|     O     |\n",
        '3' =>  "|    /      |\n",
        '4' =>  "|    /|     |\n",
        '5' =>  "|    /|\\    |\n",
        '6' =>  "|    /      |\n",
        '7' =>  "|    / \\    |\n",
        '8' =>  "|           |\n",
        '9' =>  "|           | \n",
        '10' =>  " =========== \n",
    ];

    if($value == 0){
        $contador = 0;
        echo $ventana['0'];
        echo $ventana['1'];
        while($contador < 4){
            echo $ventana['9'];
            $contador++;
        }
        echo $ventana['10'];
    }
    elseif($value == 1){
        $contador = 0;
        echo $ventana['0'];
        echo $ventana['1'];
        echo $ventana['2'];
        while($contador < 3){
            echo $ventana['9'];
            $contador++;
        }
        echo $ventana['10'];
    }
    elseif($value == 2){
        $contador = 0;
        echo $ventana['0'];
        echo $ventana['1'];
        echo $ventana['2'];
        echo $ventana['3'];
        while($contador < 2){
            echo $ventana['9'];
            $contador++;
        }
        echo $ventana['10'];
    }
    elseif($value == 3){
        $contador = 0;
        echo $ventana['0'];
        echo $ventana['1'];
        echo $ventana['2'];
        echo $ventana['4'];
        while($contador < 2){
            echo $ventana['9'];
            $contador++;
        }
        echo $ventana['10'];
    }
    elseif($value == 4){
        $contador = 0;
        echo $ventana['0'];
        echo $ventana['1'];
        echo $ventana['2'];
        echo $ventana['5'];
        while($contador < 2){
            echo $ventana['9'];
            $contador++;
        }
        echo $ventana['10'];
    }
    elseif($value == 5){
        $contador = 0;
        echo $ventana['0'];
        echo $ventana['1'];
        echo $ventana['2'];
        echo $ventana['5'];
        echo $ventana['6'];
        while($contador < 1){
            echo $ventana['9'];
            $contador++;
        }
        echo $ventana['10'];
    }
    elseif($value == 6){
        $contador = 0;
        echo $ventana['0'];
        echo $ventana['1'];
        echo $ventana['2'];
        echo $ventana['5'];
        echo $ventana['7'];
        while($contador < 1){
            echo $ventana['9'];
            $contador++;
        }
        echo $ventana['10'];
    }
    echo "\n";
}

$lista = ['auto', "casa", "edificio", "oficina", "avion", "imprenta"];

define("MAX_INTENTOS", 6);

$respuesta = "s";

while($respuesta == "s"){

    //palabra aleatoria
    //selecciona un indice aleatorio de la lista
    //lo asigna a una variable con la palabra
    //lo convierte a minusculas
    $indice = array_rand($lista);
    $palabra = $lista[$indice];
    $palabra_lower = strtolower($palabra);

    //size de palabra aleatoria
    //Guarda en una variable el numero de caracteres de la palabra aleatoria
    $largo = strlen($palabra_lower);

    //crea una variable con guiones bajos con el numero de caracteres de la palabra aleatoria
    $secreta = str_pad("", $largo, "_");

    //variable de intentos 
    $intentos = 0;

    $estado = 0;

    do{
        system("clear");
        echo "Bienvenido al juego del ahorcado \n\n";
        echo "Intentos $intentos de 6 \n\n";
        print_value($estado);
        echo "Tu palabra contiene $largo letras\n\n";
        echo "    $secreta" ."\n\n";

        $letra = readline('Introduce letra:  ');
        $letra_lower = strtolower($letra);
        

        if($letra_lower == null){
            continue;
        }
        elseif(str_contains($palabra_lower, $letra_lower)){
            $offset = 0;

            while(($pos = strpos($palabra_lower, $letra_lower, $offset)) !== false){
                $secreta[$pos] = $letra_lower;
                $offset = $pos + 1;
            }
        }
        else{
            $intentos++;
            $estado++;
            if($intentos == 6 ){
                echo "\nJuego terminado\n\n";
                echo "La palabra a descubrir era : $palabra_lower\n";
                echo "Tu descubriste : $secreta\n\n";
            }
            else{
                echo "\nLetra incorrecta ". (MAX_INTENTOS - $intentos) ." intentos restantes";
                sleep(1);
            }
        }
    }
    while($intentos < MAX_INTENTOS && $secreta !== $palabra_lower);

    if($palabra_lower == $secreta){
        echo "\nFelicidades has adivinado\n";
        echo "la palabra secreta: $palabra_lower\n\n";
    }

    $pregunta = readline("Quieres jugar otra vez?  Si  /  No :   ");
    $pregunta_lower = strtolower($pregunta);
    if($pregunta_lower == "si"){
        $respuesta = "s";
    }
    elseif($pregunta_lower == "no"){
        $respuesta = "n";
    }
}
?>