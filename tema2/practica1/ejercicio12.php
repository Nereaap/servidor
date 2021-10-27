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
        Haz un diccionario de palabras español a inglés (20 palabras mínimo) con un array 
        asociativo. Haz un programa que dada una palabra compruebe si está en el 
        diccionario y si es así que muestre la traducción, y si no está que indique que no 
        está en el diccionario. A continuación, muestra el diccionario ordenador en español
        */
        $diccionario=array(
            "hola"=>"hello",
            "perro"=>"dog",
            "gato"=>"cat",
            "llave"=>"key",
            "fiesta"=>"party",
            "amigo"=>"friend",
            "agua"=>"water",
            "mapa"=>"map",
            "rojo"=>"red",
            "negro"=>"black",
            "amarillo"=>"yellow",
            "blanco"=>"white",
            "conocimiento"=>"knowledge",
            "sol"=>"sun",
            "luna"=>"moon",
            "comer"=>"eat",
            "caballo"=>"horse",
            "casa"=>"house",
            "beber"=>"drink",
            "bebe"=>"baby",
            "palabra"=>"word"
        );
    ?>
    <form action="ejercicio12.php" method="post">
        <input type="text" id="palabra" name="palabra"/>
        <input type="submit" value="Traducir" style="width: 175px;"/>
    </form>
    <?php
        $palabra = $_POST['palabra'];
        if(array_key_exists($palabra,$diccionario)){
            echo "<br>La traducción de la palabra ".$palabra." es: ".$diccionario[$palabra];
        }else{
            echo "La palabra no esta en el diccionario.";
        }
    ?>
</body>
</html>