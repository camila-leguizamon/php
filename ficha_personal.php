<?php
ini_set("display-errors", 1);
ini_set("display_startup_error",1);
error_reporting(E_ALL);
date_default_timezone_set("America/Argentina/Buenos_Aires");

$nombre = "Camila Leguizamon";
$edad = 21;
//$aPeliculas = array("Orgullo y prejuicio", "Shrek", "Transformers");
//otra forma de hacerlo es 
$aPeliculas=["Orgullo y prejuicio","Shrek","Transformers"];
//la a de $aPeliculas significa array
//print_r($aPeliculas[1]); 
//ECHO MUESTRA SOLO UN DATO PARA MAS DE UNO USAR PRINT_R y var_dump($aPeliculas) te da la cantidad de caracteres
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha personal</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Ficha personal</h1>
            </div>
        </div>
        <div class="row">
            <div clas="-col-12">
                <table class="table table-hover border">
                    <tr>
                        <th>Fecha:</th>
                        <td> <?php
                                echo date("d/m/Y"); ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Nombre y apellido:</th>
                        <td><?php echo $nombre; ?></td>
                    </tr>
                    <tr>
                        <th>Edad:</th>
                        <td><?php echo $edad; ?></td>
                    </tr>
                    <tr>
                        <th>Películas favoritas:</th>
                        <td> <?php echo $aPeliculas[0]; ?><br>
                            <?php echo $aPeliculas[1]; ?> <br>
                            <?php echo $aPeliculas[2]; ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </main>

</body>

</html>