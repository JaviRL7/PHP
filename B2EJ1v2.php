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
        $dsn = 'pgsql:dbname=jrodrigue_fact;host=192.168.56.101;port=5432';
        $user = 'jrodriguez';
        $password = '1*pharmaton';
        try{
            $pdo = new PDO( $dsn, $user, $password);
            echo 'Conexión Correcta';
            } 
            catch( PDOException $e ) {
            echo 'Error al conectarnos: '.$e->getMessage();
            }
        ?>
</body>
</html>