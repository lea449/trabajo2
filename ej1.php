<?php

$numero = readline( "ingrese un numero");

/* if ($numero > 0){
    echo " el numero es positivo";
}
if ($numero < 0){


    echo " el numero es negativo";
}
else {
    echo "el valor es 0";
}
 */
switch ($numero) {
    case $numero > 0:
        echo "el numero es positivo";
        break;
    case $numero < 0: 
        echo " el numero es negativo";
        break;
        default: 
        echo "variable igual a 0";
}