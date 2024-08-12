<?php include ("seguridad.php"); ?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>SECOND PAGE SECURE.</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/style2.css" />
		<link rel="shortcut icon" type="image/png" href="images/chunche.png"/>
	</head>
	<body class="landing is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h3><a href="http://humancomputing30.000webhostapp.com/" target="_blank">Human Computing 3.0</a> by Paulino Berm&uacute;dez</h3>
					<nav id="nav">
						<p>
							<a href="index.html" class="button">Home</a> 
							<a href=""><?php echo $_SESSION["usuario"]; echo "  (Id de Sessi&oacute;n : ". session_id().")"?> </a>
						</p>
					</nav>
				</header>
            <!-- Banner -->
            <section id="banner">
                <h1>Bienvenido! Has iniciado sesi&oacute;n con &eacute;xito. </h1>
            </section>		
			<!-- Main -->
				<section id="main" class="container">
					<section class="box special">
					<h2> Respuestas a las preguntas del enunciado. </h2>
                    
        <p>
                <ul>
                    <li>&iquest; Puedes incluir en el sistema alguna p&aacute;gina php que no est&eacute; en la zona segura?, pru&eacute;balo. </li>
                        <p>Sí</p>         
                        <a href="paginaPHPnosegura.php"> Página fuera de la zona segura</a>
                    <li>&iquest; Puedes incluir en el sistema alguna p&aacute;gina html que no est&eacute; en la zona segura?, pru&eacute;balo. </li>
                        <p>Sí</p>
                        <a href="paginaHTMLnosegura.html"> Página fuera de la zona segura</a>
                    <li>&iquest; Puedes incluir en el sistema alguna p&aacute;gina html que est&eacute; en la zona segura?, pru&eacute;balo. </li>
                        <p>No</p>
                        <a href="paginaHTMLsegura.html"> Página dentro de la zona segura</a>
                </ul>
    
        </p>

                <section class="box" >
                    <div class="action">
                        <div class="">
                        <button onclick="location.href='unapaginasegura.php'" value="APP1" class="button special icon fa-search">APP 1</button>
                        </div>
                        <hr>
                        <div class="">
                        <button onclick="location.href='trespaginasegura.php'" value="APP3" class="button special icon fa-search">APP 3</button>
                        </div>
                        <hr>
                        <div class="">
                        <button onclick="location.href='salir.php'" value="Salir" class="button special icon fa-search">Salir</button>
                        </div>
                    </div>
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