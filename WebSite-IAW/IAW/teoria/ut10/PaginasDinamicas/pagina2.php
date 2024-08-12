<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <title>Conexión a Base de Datos.</title>
</head>
<body>
    <p>
    <center><h1>Inicio de conexion a la base de datos.</h1></center>
    <br>
    <?php 
        echo "<h2><center>Conexión a base de datos local</center></h2>";
        $conexion="localhost";
        $basededatos="test";
        $usuariodb="alumno";
        $clave="alumno";
        $tabla_db1 ="emp";
        $tabla_db2 ="dept";
        error_reporting(0);
        $conexion = new mysqli($host,$usuariodb,$clave,$basededatos);

        if ($conexion->connect_errno){
            echo "<center>Nuestro sitio presenta un fallo, estamos trabajando para resolverlo cuanto antes, disculpe las molestias.</center>";
        }else{
            echo "<center>Conexion realizada con éxito!!!</center>";
        }

    ?>
    </p>
    <div>
        <p align=center><a class="blanco" href="index.html">Indice</a></p>
    </div>
</body>
</html>