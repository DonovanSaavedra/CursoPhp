<?php
// la salida de datos sera true si el valor es tripo string y false de lo contrario
$valores = array(false, true, null, 'aeiou', '23', 23, '23.5', '', '', '0', 0);
foreach($valores as $valor){
echo "Es un string(";
var_export($valor);
echo ") = ";
echo var_dump(is_string($valor));
echo "<br><br>";
}
 
$mensaje = "Esto es una cadena de caracteres";
if(is_string($mensaje)){
    echo $mensaje."<br>";
    var_dump($mensaje);
 }   
    else{
     echo "el valor de mensaje es ".$mensaje." no es un string";
     
    }





?>