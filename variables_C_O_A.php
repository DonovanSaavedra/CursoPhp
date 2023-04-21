<?php
  // declarar una variable $ + identificador + asignacion del tipo de dato o valor
  $variable = 50;
  $mensaje = "El valor de la variable es : ";
  // echo $mensaje, $variable;
$numero1 = 29; $numero2 = 31; $numero3 = 60;
$suma = $numero1 + $numero2 + $numero3;
$resta = $numero1 - $numero2 - $numero3;
$multiplicacion = $numero1 * $numero2 * $numero3;
$divicion = $numero1 / $numero2 / $numero3;
$radio = 5;
define('pi','3.1416');
$decremento = 10;
$incremento = 10;
echo "La suma del ".$numero1." + ".$numero2." + ".$numero3."es: ".$suma."<br>";
echo "La resta del ".$numero1." - ".$numero2." - ".$numero3."es: ".$resta."<br>";
echo "La multiplicacion del ".$numero1." * ".$numero2." * ".$numero3."es: ".$multiplicacion."<br>";
echo "La divicion del ".$numero1." / ".$numero2." / ".$numero3."es: ".$divicion."<br>";

//echo var_dump (constant ('Hora'))."<br>";
//echo var_dump($suma);
//area de un circulo
$ejemplo = pi * $radio * $radio;
$mensaje2 = "el valor con el radio de: ".$radio."  por el valor de pi que es: ".pi." el resultado es: ".$ejemplo;
echo $mensaje2."<br>";
echo var_dump(constant('pi'))."<br>";
// Decremento e Incremento

echo "El valor de Decremento es: ".--$decremento."<br>";
echo "el valor de incremento es: ".++$incremento."<br>";



?>