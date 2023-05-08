<?php
/*
foreach(exprecion as $variable){
    acciones que se tendra dentro del bucle
}
*/
$arreglo = ["abcdefghijk",54,'e',14.5,true,false,10];
echo "<pre>\n";
var_dump($arreglo);
echo "</pre>\n";
foreach($arreglo as $reccorrido){
     echo "<p>$recorrido</p>\n";
}
echo "termina el ciclo <br>";


?>