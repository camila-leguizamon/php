<?php
ini_set("display-errors", 1);
ini_set("display_startup_error",1);
error_reporting(E_ALL);

$valor= rand(1,5);

//Si el valor 1 o el valor es 3 o el valor es 5 entonces
if($valor == 1|| $valor==3|| $valor==5){
    //El numero es $valor es impar
    echo ("El numero $valor es impar");
//sino
} else{
    //El numero $valor es par
    echo ("El numero $valor es par");}

/*otra solucion:
 echo $valor==1||$valor==3||$valor==5 ?"El numero $valor es impar" : "El numero $valor es par"; */
?>
