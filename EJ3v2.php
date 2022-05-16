<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 procesado de datos</title>
</head>
<body>
<h1>Ejercicio 3 formulario parte 2</h1>
<?php 
    $nombre = $_REQUEST['nombre'];
    $Ent_financiera = $_REQUEST['ent_financiera'];

    echo "<p>Datos del ejercico 3</p>";
    echo " <p>Nombre del plan: $nombre</p>";
    echo "<p>Nombre de la entidad financiera: $Ent_financiera</p>"
?>
</body>
</html>