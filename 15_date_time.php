<?php
//date_time

function obtener_hora(){
    date_default_timezone_set ('America/Mexico_City');
    return date("h : i  a");
}

echo "Hola me podrias decir que hora es? <br>";
echo "Claro son las: " . obtener_hora();
?>