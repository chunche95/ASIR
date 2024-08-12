<?php include ("skin.php") ;?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Páginas Dinámicas - Enunciado</title>
    <!-- <link rel="stylesheet" href="assets/css/main.css" /> -->
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
                                <a href="index.html" class="logo"> Volver al <strong>Inicio</strong></a>
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
                                    <h1>Enunciado</h1>
                                </header>

                                <!-- Content -->
                                    <h2 id="content">EjercicioJunioPaginasDinamicas</h2>
                                    <p>
											Creación de 5 páginas web, todas ellas enlazadas desde una página indice.html del ejercicio donde se haga uso de páginas dinámicas. Haciendo uso de 
											las tablas <b><i>emp/dept</i></b> del esquema <b>test</b> de MySQL.<br>
											El usuario admitido es: <b><i>alumno</i></b> con contraseña: <b><i>alumno</i></b> <br>
											Usando distintos formularios, se realizarán las consultas. <br>
											Se realizará una pequeña explicación de cada proceso realizado.
											<hr>
											Tendremos una página de selección de skins que se apicará a todo el sitio web.
											<hr>
											Un sitio de autenticación de accesos de cada usuario de la BD, con los siguientes credenciales:
											<li>
												<ul><b>ID</b>:<i> Apellido</i></ul>
											</li>
											<li>
												<ul><b>Contraseña</b>:<i> Número de identidad</i></ul>
											</li>
                                    </p>
                                <hr>
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
                                            <li><a href="">Skin 1</a></li>
                                            <li><a href="#">Skin 2</a></li>
                                            <li><a href="#">Skin 3</a></li>
                                            <li><a href="#">Skin 4</a></li>
                                            <li><a href="#">Skin 5</a></li>
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
