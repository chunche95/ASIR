<?php //index.php ?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>
            Autenticaci&oacute PHP.
        </title>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="assets/css/style0.css" />
        <link rel="shortcut icon" type="image/png" href="images/chunche.png"/>
    </head>
    <body class="landing is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1><a href="http://humancomputing30.000webhostapp.com/" target="_blank">Human Computing 3.0</a> by Paulino Berm&uacute;dez</h1>
					<nav id="nav">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="login.php" class="button">Login</a></li>
						</ul>
					</nav>
                </header>
            <!-- Main -->
            
            <section id="main" class="container"> <br>
                <section class="box">
                    <header>
                            <h3>LOGIN USER PROFILE &rArr; PHP ACCESS. </h3>
                    </header> 
                        <div class="box">
                           
                        <form action="control.php" method="post">    
                                    <p colspan="2" align="center">
                                        <?php 
                                            $error = isset($_GET["errorusuario"]) ? $_GET["errorusuario"] : "si"; 
                                            if ( $error == "si" ){ 
                                        ?>
                                               <b>Datos incorrectos!!!</b>
                                        <?php   }else{
                                                session_start();
                                            }
                                        ?>
                                    </p>
                                        Usuario:
                                        <input type="text" name="usuario" >
                                        Contraseña:
                                        <input type="password" name="contrasena" >
                                        <br>
                                        <button type="submit">LOGIN</button>
                            
                        </form> 

                            <p id="page-wrapper">
                                Volver a la <a href="index.html">P&aacute;gina principal</a></p>
                        
                            <div id="page-wrapper">
                                <h5> Datos correctos de acceso: </h5>
                                [VER <a href="index.html">ENUNCIADO</a> PARA SABER LOS USUARIOS PERMITIDOS.]
                            </div>
                        </div>
                </section>        
            </section>


        
            <!-- Footer -->
            <footer id="footer">
                            <ul class="icons">
                                <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                                <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                                <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                                <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
                                <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
                                <li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
                            </ul>
                            <ul class="copyright">
                                <li>&copy; Human Computing 3.0. All rights reserved.</li><li>Design: Paulino E. Berm&uacute;dez R.</a></li>
                            </ul>
                        </footer>
        </div>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>