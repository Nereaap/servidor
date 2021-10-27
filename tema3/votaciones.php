<!DOCTYPE html>
<html lang="en">
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $cookie_name = "votar";
        $cookie_value = "9";
        setcookie($cookie_name, $cookie_value, time() + (30 * 24 * 3600));
    }
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votaciones</title>
   
</head>
<body>
</body>
<H1>Vota aqui por tu asignatura favorita</H1>  
    <form method="post">
        <?php
            include_once "asignaturas.php";

        if($_SERVER['REQUEST_METHOD'] != 'POST'){
            foreach ($asignaturas as $asignaturas) {
                echo "<input type='radio' name='asignaturas' value='$asignaturas'/>$asignaturas<br/>";
            }
            echo "<br/>";
            echo "<input type='submit' value='VOTAR'>";
            echo '</form>';
        }else {
            $asignaturas = $_POST["asignaturas"];

        }
        ?>
    </form>
    <?php
    if (in_array('Despliegue de aplicaciones web', $_POST['asignaturas'])) {
        $_SESSION['Despliegue de aplicaciones web']+=5;
    }
    echo "<progress value=".$_SESSION['Despliegue de aplicaciones web']."></progress>";
    ?>
</body>
</html>