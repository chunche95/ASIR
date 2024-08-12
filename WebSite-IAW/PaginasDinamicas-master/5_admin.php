<?php require ("seguridad.php") ?>
<?php include ("skin.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Páginas Dinámicas - Zona Admin User</title>
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
                                <div class=>Usuario : <a href="#"> <?php echo $_SESSION["usuario"]; echo "  (Id de Sessi&oacute;n : ". session_id().")"?> </a></div>
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
                                    <h1>Usuarios.</h1>
                                </header>

                                <!-- Content -->
                                    <h2 id="content">Consultar datos de usuarios en el sistema:</h2>
                                    <p>Ver información relevante para los administradores, según en número de empleado.</p>
                                        <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                                        <?php 
                                              $parametro=isset($_REQUEST["myAdmini"]) ? $_REQUEST["myAdmini"] : 7876; 
                                              $br	='<br>';
                                              // Conexion, seleccion de base de datos
                                              $conexion = mysqli_connect('localhost', 'alumno', 'alumno', 'test') or die('No pudo conectarse : ' . mysqli_error());
                                              //Query de nro de empleado
                                              $queryMiJefe= sprintf("select nro from emp ");
                                              // Resultado de la Query
                                              $res= mysqli_query( $conexion , $queryMiJefe);
                                              echo '<select name="myAdmini" style="margin-left: 1em">';
                                              
                                              while ($row = mysqli_fetch_assoc($res)){
                                                  echo '<option value="';
                                                  echo $row['nro'];
                                                  echo '">';
                                                  echo $row['nro'];
                                                  echo '</option>';
                                              }
                                              echo '</select>';

                                              //  echo "<p><i>$queryempleados</i></p>"; 
                                              echo " <hr><h3> Nro de salida: " .$parametro. "<br></h3><hr>" ; 
                                                
                                              $queryempleados=sprintf("Select nro, apellido, oficio, alta, dept.id, dnombre, localidad from emp, dept where dept.id=emp.id and nro=$parametro");
                                          
                                              echo '<pre><p>                       <input type="submit" name="validar" value="Enviar consulta"> <input type="reset" value="Borrar"> </p></pre>';
                                              $resultado= mysqli_query( $conexion , $queryempleados);
                                          ?>
  <!-- -------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                                        </form>
                                        
                                          <table align="center">
                                              <tr>
                                                  <th>Nro &rarr;</th>
                                                  <th>Apellido</th>
                                                  <th>Oficio</th>
                                                  <th>Alta</th>
                                                  <th>Dnombre</th>
                                                  <th>Localidad</th>
                                                  <th>ID</th>
                                                  
                                              </tr>
                                              
  <!-- -------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                                            <?php
                                                  while ($vuelta = mysqli_fetch_assoc($resultado)){
                                                      echo "<tr>";
                                                      echo "<td>".$vuelta['nro']."</td>";
                                                      echo "<td>".$vuelta['apellido']."</td>";
                                                      echo "<td>".$vuelta['oficio']."</td>";
                                                      echo "<td>".$vuelta['alta']."</td>";
                                                      echo "<td>".$vuelta['dnombre']."</td>";
                                                      echo "<td>".$vuelta["localidad"]."</td>";
                                                      echo "<td>".$vuelta["id"]."</td></tr>";
                                                  }   
                                            ?>                                                    
<!-- -------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
                                </table>
                            </section>
                            <center>
                            <ul class="pagination" >
                                <li><a href="4_ingreso.php" class="button ">Prev</a></li>
                                <li><a href="1_jefes.php"  class="page ">1- Consulta para Jefes</a></li>
                                <li><a href="2_empleados.php" class="page ">2-Comisión Empleados</a></li>
                                <li><a href="3_salarios.php" class="page ">3-¿Conoces a tu jefe?</a></li>
                                <li><span>&hellip;</span></li>
                                <li><a href="4_ingreso.php" class="page ">4-Localidad &rarr; Salario</a></li>
                                <li><a href="5_admin.php" class="page active">5-Administración</a></li>
                                <li><a href="#" class="button disabled">Next</a></li>
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
                                        <span class="opener">Skins</span>
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