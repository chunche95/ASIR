<?php
if(isset($_POST["estilo"])){
  $estilo = $_POST["estilo"];
  setcookie("estilo", $estilo, time() + (60*60*24*7));
}else{
  if (isset($_COOKIE["estilo"])){
    $estilo = $_COOKIE["estilo"];
  }else{
    $estilo = "basico";
  }
}
$ruta = "./";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
    <head>
        <title>Ejercicio de Cookies en PHP - Cambio de estilo de una página.</title>
        <center><a href="../../../srcIAW/index.html" class="button"><h2>Volver al inicio </h2> </a> <br><br></center>
            <?php
            if ($estilo == "aleatorio"){
                echo '<style type="text/css">'.'body {'.'background-color:'.sprintf('#%06X', mt_rand(0, 0xFFFFFF)).';'.'font-family: Arial, Helvetica, sans-serif;'.'color:'.sprintf('#%06X', mt_rand(0, 0xFFFFFF)).';}';
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
    </head>
    <body>
        <center>
            <div>
                <h1>Este titulo es un H1</h1>
                <h2>Este titulo es un H2</h2>
                <h3>Este titulo es un H3</h3>
            </div>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div>Seleccione un estilo: <br><br>
                    <select name="estilo">
                        <option <?php if( $estilo == "basico" ) echo 'selected'; ?>value="basico">Basico</option>
                        <option <?php if( $estilo == "estilo1" ) echo 'selected'; ?>
                        value="estilo1">Estilo1</option>
                        <option <?php if( $estilo == "estilo2" ) echo 'selected'; ?>
                        value="estilo2">Estilo2</option>
                        <option <?php if( $estilo == "estilo3" ) echo 'selected'; ?>
                        value="estilo3">Estilo3</option>
                        <option <?php if( $estilo == "estilo4" ) echo 'selected'; ?>
                        value="estilo4">Estilo4</option>
                        <option <?php if( $estilo == "aleatorio" ) echo 'selected'; ?>
                        value="aleatorio">Aleatorio</option>
                    </select>
                    &nbsp;
                    <input type="submit" value="Cambiar mi estilo">
                </div>
            </form>
        </center>
    </body>
</html>