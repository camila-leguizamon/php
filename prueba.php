<?php
ini_set("display-errors", 1);
ini_set("display_startup_error",1);
error_reporting(E_ALL);
/*
$miArray = array();
$miArray[0] = array();
$miArray[0][0] = "Chau";
$miArray[0][1] = "Adios";
$miArray[0][2] = "Algo";
alt+92 \ alt+96 `
*/
 $miArray = array(
    array("lunes","martes","miercoles","jueves","viernes"),
    array("curso","libre","curso","libre","curso")
 );
 
 print_r($miArray);
 ///////////////////////
$aAuto = array();
$aAuto["color"]=array("negro", "verde");
$aAuto["marca"]="Ford";
$aAuto["anio"]=1908;
$aAuto["precio"]="USD 800 a USD 1000";

echo "El auto " . $aAuto["marca"] . " del año " . $aAuto["anio"] . " es de color " . $aAuto["color"][0] . " y su precio es " . $aAuto["precio"];
/////////////////////////
$nombre="Juan";
$apellido="Perez";

echo "Me llamo" . $nombre . " " . $apellido;
echo "Me llamo $nombre $apellido";

?>