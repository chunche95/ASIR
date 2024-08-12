<!DOCTYPE html>

<html lang="en">
<head>
    <link rel="stylesheet" href="page.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina de consultas 5</title>
</head>
<body>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <center><h1>Consulta de Salarios.</h1></center>
            <br><br>
            <center algn="left"><form action="pagina1.php" method="post" id="doc">
           
        <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <p>Seleccione m&iacute;nimo <input type="number" name="min" min="0" step="300"></p>
        <p>Seleccione m&aacute;ximo <input type="number" name="max" min="0" step="90000"></p>
        <p> 
            <input type="submit" name="enviar" value="Enviar" id="enviar> <input type="reset" name="reset" value="Borrar" id="reset"> 
        </p>
        <?php 
        $tabla=isset($_GET["tabla"]) ? $_GET["tabla"] : "emp"; 
        $min=isset($_GET["min"]) ? $_GET["min"] : 300;     
        $max=isset($_GET["max"]) ? $_GET["max"] : 90000;
        $br	="<br>";
        $conexion = mysqli_connect('localhost', 'alumno', 'alumno', 'test') or die('No pudo conectarse : ' . mysqli_error());
        $query_envia= sprintf("Select * from $tabla where salario > $min and salario < $max order by salario");
        $resultado= mysqli_query( $conexion , $query_envia);

        echo '<table align="center">
              <tr>
                <th>NRO</th>
                <th>APELLIDO</th>
                <th>OFICIO</th>
                <th>DIR</th>
                <th>ALTA</th>
                <th>ID</th>
                <th>SALARIO</th>
              </tr>';
        while ($row = mysqli_fetch_assoc($resultado)){
            echo "<tr>";
            echo '<td>'.$row['nro'].'</td>';
            echo '<td>'.$row['apellido'].'</td>';
            echo '<td>'.$row['oficio'].'</td>';
            echo '<td>'.$row['dir'].'</td>';
            echo '<td>'.$row['alta'].'</td>';
            echo '<td>'.$row['id'].'</td>';
            echo '<td class="rojo">'.$row['salario'].'</td>';
            echo "</tr>";
        }
        echo "</table>";
        ?>
        </div>
        <div> 
        <p align=center><a class="blanco" href="index.html">Indice</a></p>
        </div>
    </div>




</body>
</html>