<?php
/* for(exprecion1; exprecion2; exprecion;){
    sentencia o instruccion
}
*/
/*for(iniciar al ciclo; condicion; incremento o decremento){
    instrucciones que se ejecutaras si se cumplen la condicion
}
for(iniciar al ciclo; condicion; incremento o decremento):
    las instrucciones que se realizaran si se cumple el ciclo
endfor;
*/
/* 
echo "la lista de numeros pares es: ";
for($i= 2; $i <= 26; $i = $i + 2){
    echo "</bt>";
    echo $i;
    echo "</br>";
}
*/
/*
for($x = 1; $x <= 20; $x = $x + 1){
 echo $x." Ejecutando el ciclo </br>";
}
echo "termina el ciclo";
 */
for($j = 1; $j <= 5; $j++):
    echo $j;
    echo "</br>";
endfor;
echo "aqui termina en ciclo for ya que se repite".$j;

?>