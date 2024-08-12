<!DOCTYPE html>

<html lang="en">
<head>
    <link rel="stylesheet" href="page.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina de consulta 4</title>
</head>
<body>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">

        <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <?php 
        $entradaTecla=isset($_REQUEST["localidad"]) ? $_REQUEST["localidad"] : 10; 
        
        $conexion = mysqli_connect('localhost', 'alumno', 'alumno', 'test') or die('Error inesperado: ' . mysqli_error());
        
        $querylugar= sprintf("Select id, localidad from dept");

        $salida= mysqli_query( $conexion , $querylugar);
        echo '<h4>Seleccione una localidad: <h4>';
        echo '<p><select name="localidad" style="margin-left:5px"></p>';
        
        while ($row = mysqli_fetch_assoc($salida)){
            echo '<option value="';
            echo $row['id'];
            echo '">';
            echo $row['localidad'];
            echo '</option>';
        }
        echo '</select>';
        $queryjefatura=sprintf("SELECT DISTINCT a.nro, a.apellido, a.dir FROM emp a, emp b where a.nro=b.dir and a.id ='$entradaTecla'");

        echo '
        <p>
            <input type="submit" name="validar" value="Enviar" id="botonenvia"> <input type="reset" value="Borrar" value="reset" name="reset" id="reset"> 
        </p>';
        $respuesta= mysqli_query( $conexion , $queryjefatura);
        echo '</form>';
        echo '<table align="center"><tr><th>nro</th><th>apellido</th></tr>';
                while ($leofila = mysqli_fetch_assoc($respuesta)){
                    echo "<tr>";
                    echo '<td>'.$leofila['nro'].'</td>';
                    echo '<td>'.$leofila['apellido'].'</td></tr>';
                }
               
            echo '</table>';
        ?>
        <center>
            <p>
                <a class="blanco" href="index.php">Inicio</a>
            </p>
        </center>
        </div>
        <div> 
        <p align=center><a class="blanco" href="index.html">Indice</a></p>
        </div>
    </div>




</body>
</html>