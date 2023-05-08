<?php
/* utilizar las sentencias de flujo if y else en su metodo alternativo
   
   utilizar constantes, variables, operadores aritmeticos, logicos y de regulacion
   Ek ejercicio: Calcular la edad con años, meses, dias, horas, utilizando un año de 
   nacimiento e indicando si es mayor de edad imprimiendo los datos como años,meses,dias,horas

*/
define('tope', 2022);
define('meses', 12);
define('dias', 365);
define('horas', 24);
$nacimiento = "2002";
$mayor = 18;
$edad = tope - $nacimiento;
$meses = $edad * meses;
$dias = $edad * dias;
$horas = dias * horas * $edad;
if(is_numeric($nacimiento) && is_numeric($mayor) && is_numeric($edad) && is_numeric($meses) && is_numeric($dias) && is_numeric($horas)):
  if($edad >= $mayor):
    echo "Eres mayor de edad porque";
    echo "tienes: ".$edad."Años de vida</br>";
    echo "son ".$meses." de vida</br>";
    echo "son: ".$dias." dias de vida</br>";
    echo "son: ".$horas." horas de vida</br>";
  else:
        echo "Eres menor de edad porque";
        echo "tienes: ".$edad."Años de vida</br>";
        echo "son ".$meses." de vida</br>";
        echo "son: ".$dias." dias de vida</br>";
        echo "son: ".$horas." horas de vida</br>";
    
  endif;
else:
    echo "Algunos de los valores asignados no son valores numericos";

endif;


?>