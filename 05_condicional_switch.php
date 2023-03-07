<?php
// switch es otra estructura para condicionales se usa mas para cuando una variable puede tener varios valores
$user = 1;
switch($user){
    case 1:
        echo 'admin';
        break;
    case 2:
        echo 'user';
        break;
    case 3:
        echo 'private';
        break;
    default:
        echo 'something went wrong';
        break;
}
?>