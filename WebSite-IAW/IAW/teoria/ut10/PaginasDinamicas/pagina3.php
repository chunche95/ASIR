<!DOCTYPE html>

<html lang="en">
<head>
    <link rel="stylesheet" href="page.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina de consultas 3</title>
</head>
<body>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <center><h1>Registro de departamentos.</h1></center>
            <br><br>
            <center algn="left"><form action="pagina1.php" method="post" id="doc">
               <div class="form-group">
                    <label for="number">ID.<br></label>
                    <input type="number" name="id" class="form-control" id="id">
                </div>
               
                <div class="form-group">
                    <label for="text">Nombre del departamento.<br></label>
                    <input type="text" name="dnombre" class="form-control" id="dnombre">
                </div>
                
                <div class="form-group">
                    <label for="text">Nombre de la provincia.<br></label>
                    <input type="text" name="localdad" class="form-control" id="localidad">
                </div>
                
                <center>
                    <input type="submit" value="Enviar" class="button-sucess" name="elboton">
                </center>
            </form></center>
            
        <?php 
            if(isset($_POST['elboton']))
            {
                include("pagina2.php");

                $id=$_POST['id'];
                $dnombre=$_POST['dnombre'];
                $localidad=$_POST['localidad'];
                
                
                $conexion->query("INSERT INTO $tabla_db2 (id, dnombre, localidad) values ('$id','$dnombre','$localidada')");
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