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
        Crea un array 7x7 con valores numéricos aleatorios excepto las diagonales que 
        deben ser 1. A continuación muestra el array y después genera un vector que 
        contenga la suma de cada fila y otro con la suma de cada columna.
        */
        $filas = 7;
        $columnas = 7;
        $matriz[$filas][$columnas]=array();
        for($i=0;$i<$columnas;$i++){
            for($j=0;$j<$filas;$j++){
                if($i==$j || $i+$j==6){
                    $matriz[$i][$j]=1;
                    echo " ".$matriz[$i][$j]." ";
                }else{
                    $matriz[$i][$j]=rand(0,9);
                    echo $matriz[$i][$j]." ";
                }
            }
            echo "<br>";
        }
    ?>
</body>
</html>