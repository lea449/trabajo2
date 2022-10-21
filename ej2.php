<?php

$carrera = readline( "ingrese Carrera");
$nota = readline( " ingrese nota");

if ($carrera == "diurna") {

 if ($nota >= 3.5){
    echo " rinde examen";
} else {
    echo " desaprobo";
}
}
elseif ($carrera == "vespertina") {

} if ($nota >= 6){
    echo " ustesd se exime";
} elseif ( $nota >= 3.5){
    echo " rinde examen "; 
} else {
    echo "desaprobo";
}