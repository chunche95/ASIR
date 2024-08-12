<!DOCTYPE html>

<html lang="en">
<head>
    <link rel="stylesheet" href="page.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina de consultas 1</title>
</head>
<body>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <center><h1>Registro de empleados.</h1></center>
            <br><br>
            <center algn="left"><form action="pagina1.php" method="post" id="doc">
                
                <div class="form-group">
                    <label for="nro">Nº de registro.<br></label>
                    <input type="number" name="nro" class="form-control" id="nro">
                </div>
                <div class="form-group">
                    <label for="apellido">Apellido.<br></label>
                    <input type="text" name="apellido" class="form-control" id="apellido">
                </div>
                <div class="form-group">
                    <label for="oficio">Cargo.<br></label>
                    <input type="text" name="oficio" class="form-control" id="oficio">
                </div>
                <div class="form-group">
                    <label for="dir">Sucursal.<br></label>
                    <input type="text" name="dir" class="form-control" id="dir">
                </div>
                <div class="form-group">
                    <label for="date">Feche de alta.<br></label>
                    <input type="date" name="alta" class="form-control" id="alta">
                </div>
                <div class="form-group">
                    <label for="number">Sueldo.<br></label>
                    <input type="number" name="salario" class="form-control" id="salario">
                </div>
                <div>
                    <label for="form-group">Comision. <br></label>
                    <input type="text" name="comision" class="form-control" id="comision">
                </div>
                <div class="form-group">
                    <label for="number">ID.<br></label>
                    <input type="number" name="id" class="form-control" id="id">
                </div>
               
                <center>
                    <input type="submit" value="Enviar" class="button-sucess" name="elboton">
                </center>
            </form></center>
            
        <?php 
            if(isset($_POST['elboton']))
            {
                include("pagina2.php");
                $nro=$_POST['nro'];
                $apellido=$_POST['apellido'];
                $oficio=$_POST['oficio'];
                $dir=$_POST['dir'];
                $alta=$_POST['alta'];
                $salario=$_POST['salario'];
                $comision=$_POST['comision'];
                $id=$_POST['id'];
                
                $conexion->query("INSERT INTO $tabla_db1 (nro,apellido,oficio,dir,alta,salario,comision,id) values ('$nro','$apellido','$oficio','$dir','$alta','$salario','$comision','$id')");
                echo "Datos guardados correctamente en la base de datos...";
                include("cerrar.conexion.php");
            }
        ?>

        </div>
        <div> 
            <p align=center><a class="blanco" href="index.html">Indice</a></p>
        </div>
    </div>




</body>
</html>