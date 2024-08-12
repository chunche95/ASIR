<?php require ("seguridad.php") ?>
<?php include ("skin.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Páginas Dinámicas - Zona Boss</title>
 <!--   <link rel="stylesheet" href="assets/css/main.css" /> -->
    <link rel="shortcut icon" href="images/chunche.png" type="image/x-icon">
</head>
<body class="is-preload">

    <!-- Wrapper -->
        <div id="wrapper">

            <!-- Main -->
                <div id="main">
                    <div class="inner">

                        <!-- Header -->
                            <header id="header">
                                <div class="main">Usuario : <a href="#"> <?php echo $_SESSION["usuario"]; echo "  (Id de Sessi&oacute;n : ". session_id().")"?> </a></div>
                                <ul class="icons">
                                    <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                                    <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                                    <li><a href="#" class="icon fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
                                    <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                                    <li><a href="#" class="icon fa-medium"><span class="label">Medium</span></a></li>
                                </ul>
                                
                                
                            </header>

                        <!-- Content -->
             
                            <section>
                                <header class="main">
                                   <h1>Zona Jefes</h1> 
                                </header>

                            <!-- Content -->
                            <h1 id="content">Consultas de jefes:</h1>
                                <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                   
    <!-- -------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                                        <?php

                                            /******************************** */
                                            /*  Consulta para el formulario   */
                                            /******************************** */
                                                $parametro= isset($_REQUEST["ide"]) ? $_REQUEST["ide"]:20;
                                                
                                                if(isset($_GET["ide"])){
                                                    $ide = $_GET["ide"];
                                                    setcookie("ide", $ide, time() + (60 * 60 * 24 * 7));
                                                }else{
                                                    if (isset($_COOKIE["ide"])){
                                                      $ide = $_COOKIE["ide"];
                                                    }
                                                }

                                                $br = "<br>";

                                            // Coneción con la base de datos
                                            $conexion = mysqli_connect("localhost", "alumno", "alumno", "test") or die("Imposible de conectarse".mysqli_error());
                                            // Query  identificador
                                            $queryIde = sprintf("select localidad, id,dnombre from dept");
                                            // Resultado de la query
                                            $respuesta =  mysqli_query($conexion, $queryIde);
                                            echo "Seleccione el ID del departamento a consultar: <br>";
                                            echo "<select name=\"ide\" style=\"margin-left: 3em\">";
                                            while ($row = mysqli_fetch_assoc($respuesta)){
                                                echo '<option value="';
                                                echo $row['id'];
                                                echo '">';
                                                echo $row['id'];
                                                echo " - ";
                                                echo $row['dnombre'];
                                                echo " (";
                                                echo $row['localidad'];
                                                echo ")";
                                                echo '</option>';
                                            }
                                        echo "</select> <br>";
                                            $queryJefes=sprintf("Select nro, apellido, oficio, salario, comision, dnombre from emp ,dept where emp.id= dept.id and emp.id = ".$parametro);
                                        echo '<input type="submit" value = "Enviar consultar"> ';
                                        echo " <hr><h3> ID de entrada: " .$parametro. "<br></h3><hr>" ;  
                                        $resultado = mysqli_query($conexion, $queryJefes);
                                        echo "</form>";
                                        /******************************** */
                                        /*    Respuesta al formulario     */
                                        /******************************** */                                            
                                            // Cabecera de la tabla
                                            echo "<table>";
                                            echo "<tr>";
                                            echo "<th> NRO </th>";
                                            echo "<th> APELLIDO </th>";
                                            echo "<th> OFICIO (Jefe) </th>";
                                            echo "<th> SALARIO </th>";
                                            echo "<th> COMISION </th>";
                                            echo "<th> DNOMBRE </th>";
                                            echo "</tr>";
                                                while ($vuelta = mysqli_fetch_assoc($resultado)){
                                                    $jefe=$vuelta["oficio"];
                                                    if ($jefe == "DIRECTOR"){
                                                        $boss = "Sí";
                                                    }else{
                                                        $boss = "No";
                                                    }
                                                    echo "<tr>";
                                                    echo "<th>". $vuelta['nro']. "</th>";
                                                    echo "<th>". $vuelta['apellido']. " </th>";
                                                    echo "<th>". $vuelta['oficio'] . " ( " . $boss .  " ) </th>";
                                                    echo "<th>". $vuelta['salario'] . " </th>";
                                                    echo "<th>". $vuelta['comision']. " </th>";
                                                    echo "<th>". $vuelta['dnombre']. " </th>";
                                                    echo "</tr>";
                                                }
                                            echo "</table>";
                                          
                                           
                                            
                                    ?>

                                                                                    
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                                
                               
                            </section>
                            <center>
                            <ul class="pagination" >
                                <li><span class="button disabled">Prev</span></li>
                                <li><a href="1_jefes.php"  class="page active">1- Consulta para Jefes</a></li>
                                <li><a href="2_empleados.php" class="page ">2-Comisión Empleados</a></li>
                                <li><a href="3_salarios.php" class="page  ">3-¿Conoces a tu jefe?</a></li>
                                <li><span>&hellip;</span></li>
                                <li><a href="4_ingreso.php" class="page ">4-Localidad &rarr; Salario</a></li>
                                <li><a href="5_admin.php" class="page ">5-Administración</a></li>
                                <li><a href="2_empleados.php" class="button">Next</a></li>
                            </ul>
                            </center>
                    </div>
                </div>
            <!-- Sidebar -->
				  <div id="sidebar">
                    <div class="inner">

                        <!-- Search -->
                            <section id="search" class="alt">
                                <form method="post" action="#">
                                    <input type="text" name="query" id="query" placeholder="Search" />
                                </form>
                            </section>

                        <!-- Menu -->
                            <nav id="menu">
                                <header class="major">
                                    <h2>Menu</h2>
                                </header>
                                <ul>
                                    <li><a href="index.html">Inicio</a></li>
                                    <li><a href="enunciado.php">Enunciado</a></li>
                                    <li><a href="salir.php">Salir</a></li>
                                    <li>
                                        <span class="opener">Code Skins</span>
                                        <ul>
                                            <li><a href="assets/css/main2.css">Skin 1</a></li>
                                            <li><a href="assets/css/estilo1.css">Skin 2</a></li>
                                            <li><a href="assets/css/estilo2.css">Skin 3</a></li>
                                            <li><a href="assets/css/estilo3.css">Skin 4</a></li>
                                            <li><a href="assets/css/estilo4.css">Skin 5</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contacto.php">Contacto</a></li>
                                    <li><a href="built/generic.html">Redes Sociales</a></li>
                                </ul>
                            </nav>

                       
                        <!-- Section -->
                            <section>
                                <header class="major">
                                    <h2>Contacto:</h2>
                                </header>
                                <p>
                                    Páginas Dinámicas es un ejercicio realizado para la asignatura de Implantación de Aplicaciones Web, desarrollada por Paulino Esteban Bermúdez R.
                                    Estudiante del IES Alonso de Avellaneda, estudiante de Ing. Informática en la UNED, graduado en Electricidad y Electrónica. Con pasión por la IA,
                                    cofundador de <i>Human Computing</i> y aprendiz de la UAH en Big Data.
                                </p>
                                <ul class="contact">
                                    <li class="fa-envelope-o"><a href="mailto:humancomputing3@gmail.com">humancomputing3@gmail.com</a></li>
                                    <li class="fa-phone"><a href="tel:+34667332151"></a>(+34) 667 33 21 51</li>
                                    <li class="fa-home">Calle Hachero 3, 2A. <br>
                                    Madrid</li>
                                </ul>
                            </section>

                        <!-- Footer -->
                            <footer id="footer">
								<p class="copyright">
									&copy; Human Computing 3.0. All rights reserved. <br> 
									Design: <a href="https://human-computing.webnode.es/">Human Computing 3.0</a>.</p>
                            </footer>

                    </div>
                </div>

        </div>

    <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>

</body>
</html>