<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1 Base de datos</title>
</head>
<body>
    <?php
    for ($tabla=1; $tabla<=10; $tabla++){
        echo 'Tabla del '.$tabla.'<br/>';
    for ($x=1; $x <=10; $x++){
        echo $tabla.' * '.$x.'='.$tabla*$x. '<br/>';
        }
        echo '<hr/>';
    }
    ?>
</body>
</html>