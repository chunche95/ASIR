<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
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

<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zone Pauchino</title>
    <style>   
    </style>
</head>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->
<script type="text/javascript">
        function Mostrar(){
            document.getElementById("caja").style.display="inline-block";
        }
        function Ocultar(){
            document.getElementById("caja").style.display="none";
        }
        function Mostrar_Ocultar(){
            var caja = document.getElementById("caja");
            if(caja.style.display == "none"){
                Mostrar();
                document.getElementById("boton").value = "&#128584;  &rarr; Ocultame";
            }
            else{
                Ocultar();
                document.getElementById("boton").value = "&#128585; &rarr; Ver (Cambio)";
            }

        }
    </script>
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------ -->

<body  class="is-preload">
    
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
             <div class="wrapper" >
				<div class="col-4 col-12-medium" >
                    <!--        Botones        --> 
                    <input type="submit" value="👉" id="boton" onclick="Mostrar_Ocultar()" /> 
                    <!-- Caja de estilos -->
                    <section id="caja" style="display: inline-block; width:300px; heigth:600px;background:green;">
                        <select  name="estilo" id="estilo">
                            <option <?php if( $estilo == "basico" ) echo 'selected'; ?>value="basico">Basico</option>
                            <option <?php if( $estilo == "estilo1" ) echo 'selected'; ?>
                            value="estilo1"> Hawaii Volcano</option>
                            <option <?php if( $estilo == "estilo2" ) echo 'selected'; ?>
                            value="estilo2">Paris Blue Streak </option>
                            <option <?php if( $estilo == "estilo3" ) echo 'selected'; ?>
                            value="estilo3">Hello Japan</option>
                            <option <?php if( $estilo == "estilo4" ) echo 'selected'; ?>
                            value="estilo4">Eco Quantic Canada</option>
                            <option <?php if( $estilo == "estilo5" ) echo 'selected'; ?>
                            value="main2">World Galaxy Brazil</option> 
                        </select>
                    </section>
                    
                    
                </div>
            </div>
        </form>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>