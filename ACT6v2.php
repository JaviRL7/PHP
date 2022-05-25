<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parte de la conexion con Postgres</title>
</head>
<body>
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
        
        $nombre = $_REQUEST['nombre'];
        $apellido1 = $_REQUEST['apellido1'];
        $apellido2 = $_REQUEST['apellido2'];
        /*comando*/
        if ($nombre != "" and $apellido1!="" and $apellido2!=""){$query = "SELECT * FROM CLIENTE WHERE upper(nombre) LIKE ('%'|| '$nombre' ||'%') and upper(apellido1) LIKE ('%'|| '$apellido1' ||'%') and upper(apellido2) LIKE ('%'|| '$apellido2' ||'%')";}
        if ($nombre != "" and $apellido1!="" and $apellido2==""){$query = "SELECT * FROM CLIENTE WHERE upper(nombre) LIKE ('%'|| '$nombre' ||'%') and upper(apellido1) LIKE ('%'|| '$apellido1' ||'%')";}
        if ($nombre != "" and $apellido2!="" and $apellido1==""){$query = "SELECT * FROM CLIENTE WHERE upper(nombre) LIKE ('%'|| '$nombre' ||'%') and upper(apellido2) LIKE ('%'|| '$apellido2' ||'%')";}
        if ($apellido1 != "" and $apellido2!="" and $nombre==""){$query = "SELECT * FROM CLIENTE WHERE upper(apellido1) LIKE ('%'|| '$apellido1' ||'%') and upper(apellido2) LIKE ('%'|| '$apellido2' ||'%')";}
        if ($nombre != "" and $apellido1=="" and $apellido2==""){$query = "SELECT * FROM CLIENTE WHERE upper(nombre) LIKE ('%'|| '$nombre' ||'%')";}
        if ($apellido1!="" and $apellido2=="" and $nombre==""){$query = "SELECT * FROM CLIENTE WHERE upper(apellido1) LIKE ('%'|| '$apellido1' ||'%')";}
        if ($apellido2!="" and $nombre=="" and $apellido1==""){$query = "SELECT * FROM CLIENTE WHERE upper(apellido2) LIKE ('%'|| '$apellido2' ||'%')";}
        if ($nombre == "" and $apellido1 =="" and $apellido2==""){$query = "SELECT * FROM CLIENTE";}
        $results = $pdo->query($query);
        /*$query = "SELECT * FROM CLIENTE WHERE nombre = '$nombre' and apellido1= '$apellido1' and apellido2= '$apellido2'";*/
        /*$results = $pdo->query($query);*/
        /*Depuracion*/
        echo "<table border='1'>\n";
        echo "<tr>\n";
        echo "<th>Cod Cliente</th>\n";
        echo "<th>Nombre</th>\n";
        echo "<th>Apellido 1</th>\n";
        echo "<th>Apellido 2</th>\n";
        echo "<th>Credito</th>\n";
        echo "<th>Ciudad</th>\n";
        echo "<th>dni</th>\n";
        echo "</tr>\n";
        foreach ($results as $row){
            echo "<tr>\n";
            echo "<td>".$row['cod_cliente']."</td>";
            echo "<td>".$row['nombre']."</td>";
            echo "<td>".$row['apellido1']."</td>";
            echo "<td>".$row['apellido2']."</td>";
            echo "<td>".$row['credito']."</td>";
            echo "<td>".$row['ciudad']."</td>";
            echo "<td>".$row['dni']."</td>";
            echo "</tr>";
        }
            echo "</table>\n"
        ?>
</body>
</html>