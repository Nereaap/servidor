<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*
        Rellena un array de 10 números enteros, con los 10 primeros números naturales. 
        Calcula la media de los que están en posiciones pares y muestra los impares por 
        pantalla
        */
        $numeros=array();
        for($i=0;$i<10;$i++){
            $numeros[$i]=$i;
        }
        $suma=0;
        echo "<strong>Numeros impares</strong> <br>";
        for($i=0;$i<10;$i+=2){
            $suma+=$numeros[$i];
            echo $numeros[$i+1]."    ";
        }
        $media= $suma/5;
        echo "<br>";
        echo "<strong>La media de los pares es:</strong> ". $media;
    ?>
</body>
</html>