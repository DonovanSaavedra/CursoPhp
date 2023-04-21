<?php
 $valor1 = 200;
 $valor2 = 20;
 $valor3 = 2000;
 //  sentencia if operadores relacionales o operadores logicos
 /* 
 if (condicion){
    codigo o accion a realizar en el navegador si se cumple la condicion 
 }
   else{
     si la accion es contraria al if dentro de las llaves la accion a ejecutar
   }
 */
//este if sera de operadores relacionales
/*if($valor1 >= $valor2){
   echo "Verdadero".$valor1;

}
 else {
    echo "Falso";
 }
*/
$persona = "hombre";

/*
 comparando el valor de la variable con un string
if ($persona == 'hombre'){
     echo "como el genero de la variable es hombre se llamara juan "."<br>";


}
else{
   echo "como el genero no es hombre no le dare un nombre";

}
*/
/* 
if($valor1 >= $valor2 && $valor1 >= $valor3 ){
  echo "El valor de: ".$valor1." es mayor a: ".$valor2." si mayor a: ".$valor3;
    
}else if($valor2 >= $valor1 && $valor2 >= $valor3){
    echo "El valor de: ".$valor2." es mayor a: ".$valor1." y si mayor a: ".$valor3;

}
else if($valor3 >= $valor1 && $valor3 >= $valor2){
    echo "El valor de: ".$valor3." es mayor a: ".$valor1." y si mayor a: ".$valor2;

}
else {
    echo "nose cumple nada chavo";
}
*/
$letra = "r";
if($letra == 'a' || $letra == 'e' || $letra =='i' || $letra == 'o' || $letra == 'u'){
 echo "el valor de la variable letra es: ".$letra." una vocal";
}
else{
    echo "el valor no es una vocal sino una consonante";
}

?>