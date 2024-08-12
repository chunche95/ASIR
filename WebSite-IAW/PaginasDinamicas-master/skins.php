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
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <?php
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
    </head>
    <body>
        
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div align="center">Seleccione estilo: <br><br>
                        
            <section id="caja">
                        <select  name="estilo" id="estilo">
                            <option <?php if( $estilo == "basico" ) echo 'selected'; ?>value="basico">Basico</option>
                            <option <?php if( $estilo == "estilo1" ) echo 'selected'; ?>
                            value="estilo1"> Hawaii Volcano</option>
                            <option <?php if( $estilo == "estilo2" ) echo 'selected'; ?>
                            value="estilo2">Blue Streak Paris</option>
                            <option <?php if( $estilo == "estilo3" ) echo 'selected'; ?>
                            value="estilo3">Hello Kitty Japan</option>
                            <option <?php if( $estilo == "estilo4" ) echo 'selected'; ?>
                            value="estilo4">Ecologic Quantic Canada</option>
                            <option <?php if( $estilo == "estilo5" ) echo 'selected'; ?>
                            value="main2">World Galaxy Brazil</option> 
                        </select> 
                       <!-- <input type="submit" id="estilo" value="Actualizar el estilo"> -->
                        <input type="submit" value=" &#128506;" id="boton" onclick="Mostrar_Ocultar()">
                    </section> 
            </div>
        </form>
        
        <h1>
            SKINS APLICADAS A LA PÁGINA DE INICIO.
        </h1>
        
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="index.html" class="logo"><strong>Volver a index</strong> de Human Computing 3.0</a>
									<ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon fa-medium"><span class="label">Medium</span></a></li>
									</ul>
								</header>

							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
											<h1>Bienvenido a las páginas dinámicas.<br />
											de Pauchino.</h1>
											<p>Mi sitio. </p>
										</header>
										<p>
											<br><br><br><br><br>
											Creación de 5 páginas web, todas ellas enlazadas desde una página indice.html del ejercicio donde se haga uso de páginas dinámicas. Haciendo uso de 
											las tablas <b><i>emp/dept</i></b> del esquema <b>test</b> de MySQL.<br>
											El usuario admitido es: <b><i>alumno</i></b> con contraseña: <b><i>alumno</i></b> <br>
											Usando distintos formularios, se realizarán las consultas. <br>
											Se realizará una pequeña explicación de cada proceso realizado.
											<hr>
											[...]
										</p>
										<ul class="actions">
											<li><a href="enunciado.html" target="_blank" rel="noopener noreferrer" class="button big">Ver enunciado sólo.</a></li>
										</ul>
									</div>
									<span class="image object">
										<img src="images/picInicio.jpg" alt="" />
									</span>
								</section>
							<hr>
							<a href="login.php" class="button primary">Acceder a la zona privada</a>
							<p>
								<br> Para tener acceso a la zona segura, primero autentifiquese.
							</p>
							<button disabled="disabled">Ver datos</button>	
							<hr>
                            
        <h4>Default</h4>
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Item1</td>
                            <td>Ante turpis integer aliquet porttitor.</td>
                            <td>29.99</td>
                        </tr>
                        <tr>
                            <td>Item2</td>
                            <td>Vis ac commodo adipiscing arcu aliquet.</td>
                            <td>19.99</td>
                        </tr>
                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2"></td>
                            <td>100.00</td>
                        </tr>
                    </tfoot>
                </table>
            </div>

    <h3>Buttons</h3>
    <ul class="actions">
        <li><a href="#" class="button primary">Primary</a></li>
        <li><a href="#" class="button">Default</a></li>
    </ul>
    <ul class="actions">
        <li><span class="button primary disabled">Primary</span></li>
        <li><span class="button disabled">Default</span></li>
    </ul>

<!-- Form -->
    <h3>Form</h3>

    <form method="post" action="#">
        <div class="row gtr-uniform">
            <div class="col-6 col-12-xsmall">
                <input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
            </div>
            <!-- Break -->
            <div class="col-12">
                <select name="demo-category" id="demo-category">
                    <option value="">- Category -</option>
                    <option value="1">Human Resources</option>
                </select>
            </div>
            <!-- Break -->
            <div class="col-4 col-12-small">
                <input type="radio" id="demo-priority-low" name="demo-priority" checked>
                <label for="demo-priority-low">Low</label>
            </div>
            <div class="col-4 col-12-small">
                <input type="radio" id="demo-priority-normal" name="demo-priority">
                <label for="demo-priority-normal">Normal</label>
            </div>
            <!-- Break -->
            <div class="col-6 col-12-small">
                <input type="checkbox" id="demo-human" name="demo-human" checked>
                <label for="demo-human">I am a human</label>
            </div>
            <!-- Break -->
            <div class="col-12">
                <textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
            </div>
            <!-- Break -->
            <div class="col-12">
                <ul class="actions">
                    <li><input type="submit" value="Send Message" class="primary" /></li>
                    <li><input type="reset" value="Reset" /></li>
                </ul>
            </div>
        </div>
    </form>









							<!-- Section -->
								<section>
									<header class="major">
										<h2>Contenidos</h2>
									</header>
									<div class="features">
										<article>
											<span class="icon fa-diamond"></span>
											<div class="content">
												<h3> Implementación de las tablas. </h3>
												<p>
													Implementación de las tablas <i><b>emp/dept</b></i> en el esquema <i><b>test</b></i>.
													Abrir <b>phpMyAdmin</b> y crear una BD tal como se solicita en el enunciado.
												</p>
											</div>
										</article>
										<article>
											<span class="icon fa-paper-plane"></span>
											<div class="content">
												<h3>Sistema de Login.</h3>
												<p>
													Generación de un <b><i>sistema de login </i></b> con una autenticación de usuario y contraseña. Para el acceso a los formularios de la BD.
												</p>
											</div>
										</article>
										<article>
											<span class="icon fa-rocket"></span>
											<div class="content">
												<h3>Generación de Skins.</h3>
												<p>
													Creación de <b>skins para la personalización</b> del sitio web.
												</p>
											</div>
										</article>
										<article>
											<span class="icon fa-signal"></span>
											<div class="content">
												<h3>Formularios.</h3>
												<p>
													Formularios para realizar <b><i>consultas en la base de datos</i></b>.
												</p>
											</div>
										</article>
									</div>
								</section>
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
                                    <li><a href="login.php">Login</a></li>
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