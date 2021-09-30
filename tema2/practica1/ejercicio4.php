<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio4</title>
</head>
<body>
    <?php
    /*
     Tenemos los coeficientes de una ecuación de 2º grado (ax2 + bx + c = 0) en tres 
    variables $a, $b y $c, muestra la ecuación y sus soluciones. Si no existen, debe 
    indicarse por pantalla
    */

    $a = rand();
    $b = 0;
    $c = rand();
    $x;
    $x1;
    if ($a == 0) {
        echo "Hay 1 solución <br>";
        $x = -($b/$c);
        echo $x;
    } elseif ($b == 0) {
        $x1 = sqrt((-$c)/$a);
        echo "Solución 1: ".$x1;
    }
    
    ?>
</body>
</html>