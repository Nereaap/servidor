<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 1</title>
</head>
<body>
    <?php
        $primera = rand(0,100);
        $segunda = rand(0,100);
        $diferencia = $primera-$segunda;
        $division = $primera/$segunda;
        echo "La diferencia entre $primera menos $segunda es $diferencia";
        echo "<br>";
        echo "La division de $primera entre $segunda es $division";
    ?>
</body>
</html>