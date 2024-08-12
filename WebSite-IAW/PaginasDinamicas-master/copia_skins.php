
<?php
if(isset($_POST["estilo"])){
  $estilo = $_POST["estilo"];
  setcookie("estilo", $estilo, time() + (60 * 60 * 24 * 7));
}else{
  if (isset($_COOKIE["estilo"])){
    $estilo = $_COOKIE["estilo"];
  }else{
    $estilo = "basico";
  }
}
$ruta = "assets/css/";


if ($estilo == "aleatorio"){
    echo '<style type="text/css">'.'body {'.'background-color:'.sprintf('#%06X', mt_rand(0, 0xFFFFFF)).';'.'font-family: Tahoma, Helvetica, sans-serif;'.'color:'.sprintf('#%06X', mt_rand(0, 0xFFFFFF)).';}';
    echo 'h1 { color:'.sprintf('#%06X', mt_rand(0, 0xFFFFFF)).'}';
    echo 'h2 { color:'.sprintf('#%06X', mt_rand(0, 0xFFFFFF)).'}';
    echo 'h3 { color:'.sprintf('#%06X', mt_rand(0, 0xFFFFFF)).'}';
    echo '</style>';}
else {
    if( isset($estilo) ){
        echo '<link rel="STYLESHEET" type="text/css" href="' . $ruta.$estilo . '.css">';
    }else{
            echo '<link rel="STYLESHEET" type="text/css" href="' . $ruta. 'basico.css">';
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zone Pauchino</title>
    <script>
        function mostrar(){
            document.getElementById("estilo").style.display="flex";
        }
        function ocultar(){
            document.getElementById("estilo").style.display="none";
        }
    </script>
    <style>
   
    </style>
</head>
<body>
    
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            
            <div class="row gtr-200">
				<div class="col-4 col-12-medium">
                      <!-- Caja de estilos -->
                    <select  name="estilo" id="estilo">
                        <option <?php if( $estilo == "basico" ) echo 'selected'; ?>value="basico">Basico</option>
                        <option <?php if( $estilo == "estilo1" ) echo 'selected'; ?>
                        value="estilo1"> Hawaii Volcano</option>
                        <option <?php if( $estilo == "estilo2" ) echo 'selected'; ?>
                        value="estilo2">Blue Streak</option>
                        <option <?php if( $estilo == "estilo3" ) echo 'selected'; ?>
                        value="estilo3">Hello Kitty</option>
                        <option <?php if( $estilo == "estilo4" ) echo 'selected'; ?>
                        value="estilo4">Ecologic Quantic</option>
                        <option <?php if( $estilo == "estilo5" ) echo 'selected'; ?>
                        value="main2">World Galaxy </option> 
                    </select> 
                    <input type="submit" id="estilo" value="Actualizar el estilo">
                    <!-- Botones -->
                    <input type="button" value="Ver" onclick="mostrar()">
                    <input type="button" value="ocultar" onclick="ocultar()">
                </div>
            </div>
        </form>
        
</body>
</html>