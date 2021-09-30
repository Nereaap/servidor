<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 2</title>
</head>
<body>
    <?php
    /*
    Tenemos dos cadenas $cadena1 con valor "hola a todo el mundo" y $cadena2 con 
    valor "mi nombre es <nombre y apellidos del alumno/a>". Se pide:
        - $cadena3 contendrá el valor de la concatenación de $cadena1 y $cadena2, 
        mostrar por pantalla el contenido de $cadena3
        - $cadena1 contendrá el resultado de la concatenación de sí misma con 
        $cadena2, mostrar por pantalla el contenido de $cadena1
    */

    $cadena1 = "hola a todo el mundo";
    $cadena2 = "mi nombre es Nerea Ávila Pérez";
    $cadena3 = $cadena1. " " .$cadena2;
    echo "Cadena 3 = ".$cadena3;
    $cadena1 = $cadena1. " " .$cadena2;
    echo "<br>";
    echo "Cadena 1 = ".$cadena1;
    ?>
</body>
</html>