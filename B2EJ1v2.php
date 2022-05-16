<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parte de la conexion con Postgres</title>
</head>
<body>
    <h1>Conexion con Postgres</h1>
    <?php
        $dsn = 'pgsql:dbname=jrodriguez_fact;host=192.168.56.101;port=5432';
        $user = 'jrodriguez';
        $password = '1*pharmaton';
        try{
            $pdo = new PDO( $dsn, $user, $password);
            echo 'Conexión Correcta';
            } 
            catch( PDOException $e ) {
            echo 'Error al conectarnos: '.$e->getMessage();
            }
        /* Datos del forulario */
        $codigo_cliente = $_REQUEST['cod'];
        $nombre = $_REQUEST['nombre'];
        $apellido1 = $_REQUEST['apellido1'];
        $apellido2 = $_REQUEST['apellido2'];
        $credito = $_REQUEST['credito'];
        $ciudad = $_REQUEST['ciudad'];
        $dni = $_REQUEST['dni'];
        /*comando*/
        $query = "INSERT INTO cliente ";
        $query .="VALUES ((select max(cod_cliente)+1 from cliente), '$nombre', '$apellido1', '$apellido2', '$credito', '$ciudad', '$dni')" ;
        /*Depuracion*/
        echo "<p>Consulta: $query</p>\n";
        $result = $pdo->exec($query);
        echo "<p>Se incertaron $result registros</p>";

        ?>
</body>
</html>