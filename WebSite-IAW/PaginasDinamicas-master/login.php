<!DOCTYPE HTML>
<html>
	<head>
		<title>Páginas Dinámicas - Autenticación</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    	<!-- <link rel="stylesheet" href="assets/css/login.css" /> -->
        <link rel="shortcut icon" href="images/chunche.png" type="image/x-icon">
        <script src="assets/js/validation.js"></script> <!--Es necesario que lo ejecute antes -->
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" >
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
							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
											<h1> Autenticación </h1>
										</header>
                                        <!-- Form login-->
                                        <form method="POST" action="control.php" onsubmit="return validar();">
                                            <div class="row gtr-uniform">	
                                                <h5>Login <img class="login_img" src="images/chunche.png" alt="" ></h5>
                                            </div>
                                            <?php
                                                @$error = isset($_GET["errorusuario"]) ? $_GET["errorusuario"] : "si";
                                                if ( $error == "si" ){
                                                    print ( "<h3> <font color='red'>Introduzca sus credenciales, por favor.</font> </h3>");
                                                }else{
                                                    prinf("<h2> Su clave de acceso </h2>");
                                                }
                                            ?>
                                            
                                            <div class="row gtr-uniform">
                                                <div class="col-6 col-12-xsmall">
                                                    <input type="text" name="usuario" id="demo-name" value="" placeholder="&#128100 Usuario" required autofocus/>
                                                </div> <br>
                                                <div class="col-6 col-12-xsmall">
                                                    <input type="password" name="contrasena" id="demo-password" value="" placeholder="&#X1F512 Contraseña" required autofocus/>
                                                </div>
                                                <div class="col-12">
                                                        <ul class="actions">
                                                            <li><input type="submit" value="Login" class="primary" /></li>
                                                            <li><input type="reset" value="Olvide contraseña" /></li>
                                                        </ul>
                                                </div>
                                            </div>
                                        </form>
                                 
            
                        <!-- Footer -->
                            <footer id="footer">
								<p class="copyright">
                                                    &copy; Human Computing 3.0. All rights reserved. <br> 
                                                    Design: <a href="https://human-computing.webnode.es/">Human Computing 3.0</a>.
                                </p>
                            </footer>    
                </div>

    <!-- Scripts -->
        <?php include ("skin.php") ;?>

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>

</body>
</html>