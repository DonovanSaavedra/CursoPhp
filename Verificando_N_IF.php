<?php
/* Practica que calcule el rpomedio de 5 notas berificando que los valores sean numericos y posterior mente 
idicar si esta aprovado o reprovado segun el valor asignado por el promedio
*/ 
$calificacion1 = 10;
$calificacion2 = 5;
$calificacion3 = 10;
$calificacion4 = 9;
$calificacion5 = 5;
$minimo = 7;
 /*if(is_numeric($calificacion1) && is_numeric($calificacion2) && is_numeric($calificacion3) && is_numeric($calificacion4) && is_numeric($calificacion5)){
   $promedio = ($calificacion1+$calificacion2+$calificacion3+$calificacion4+$calificacion5)/5;
   if($promedio >= $minimo){
       echo "<br><br> Tu promedio es de: ".$promedio." estas aprovado";
   }
   else{
        echo "<br><br> Tu promedio es de: ".$promedio." por lo tanto eres no competente";

   }

}
else{
    $mensaje = "Alguno de los valores de las calificaciones no son numeros";
    echo $mensaje;

}
*/
if (is_numeric($calificacion1)){
    $calificacion1 = $calificacion1;

}
else{
    echo "el valor de la calificacion 1 no es un valor numerico";

}
if (is_numeric($calificacion2)){
    $calificacion2 = $calificacion2;

}
else{
    echo "el valor de la calificacion 2 no es un valor numerico";

}
if (is_numeric($calificacion3)){
    $calificacion3 = $calificacion3;

}
else{
    echo "el valor de la calificacion 3 no es un valor numerico";

}
if (is_numeric($calificacion4)){
    $calificacion4 = $calificacion4;

}
else{
    echo "el valor de la calificacion 4 no es un valor numerico";

}
if (is_numeric($calificacion5)){
    $calificacion5 = $calificacion5;

}
else{
    echo "el valor de la calificacion 5 no es un valor numerico";

}
$promedio = ($calificacion1+$calificacion2+$calificacion3+$calificacion4+$calificacion5)/5;
if($promedio >= $minimo){
     echo "Aaaaa tu calificacion es de: ".$promedio." que bueno eres broooooo¡¡¡¡¡¡";

}
else{
      echo "Ijole tu calificacion es de: ".$promedio." suerte para la proxima siguete esforsando";

}


?>