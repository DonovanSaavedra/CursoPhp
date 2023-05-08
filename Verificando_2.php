<?php 
/* Practica que calcule el rpomedio de 5 notas berificando que los valores sean numericos y posterior mente 
idicar si esta aprovado o reprovado segun el valor asignado por el promedio
*/ 
$calificacion1 = 10;
$calificacion2 = 10;
$calificacion3 = 10;
$calificacion4 = 10;
$calificacion5 = 10;
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

if(!is_numeric($calificacion1)){
echo "el valor de la calificacion 1 es: ".$calificacion1."  no es un valor numerico";

}
elseif(!is_numeric($calificacion2)){
    echo "El valor de la calificacion 2 es: ".$calificacion2."  no es un valor numerico";
}
elseif(!is_numeric($calificacion3)){
    echo "El valor de la calificacion 3 es: ".$calificacion3."  no es un valor numerico";
}
elseif(!is_numeric($calificacion4)){
    echo "El valor de la calificacion 4 es: ".$calificacion4."  no es un valor numerico";
}
elseif(!is_numeric($calificacion5)){
    echo "El valor de la calificacion 5 es: ".$calificacion5."  no es un valor numerico";
}
else{
    $promedio = ($calificacion1+$calificacion2+$calificacion3+$calificacion4+$calificacion5)/5;
     if($promedio >= $minimo){
        echo "Sacaste: ".$promedio." pasaste chavo bien hecho";
     }
     else{
        echo "Sacaste: ".$promedio." suerte para la proxima";
     }
}


?>