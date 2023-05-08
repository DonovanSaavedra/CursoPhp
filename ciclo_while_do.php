<?php
//trabajaremos con el ciclo wile y do .. while
/*while(Exprecion o Valoracion){
    acciones se cumpla la exprecion
}

do{
    sentencia o accion
}while(exprecion o valoracion);
*/
/*
$variable = 0;
while($variable < 25){
    $variable ++; //se incrementa $variable uno a uno
    echo "el valor de la variable es =".$variable."<br><7br>";
}
echo "el chico while acaba en: ".$variable; 

*/
$genero = "femenino";
do{
  echo $genero." </br>";
  echo "se ejecutara el codigo por que la primera accion antes que la validacion";
}
while($genero == "masculino");
echo "se ejecuta una ves que tdod se cumple";

?>