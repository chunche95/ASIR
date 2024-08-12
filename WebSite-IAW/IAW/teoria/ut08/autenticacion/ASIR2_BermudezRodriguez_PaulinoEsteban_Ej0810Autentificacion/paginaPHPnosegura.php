<!DOCTYPE html>
<html>

<head>
        <title>PHP fuera de zona segura</title>
		<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta content="MSHTML 6.00.2800.1141" name=GENERATOR>
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="shortcut icon" type="image/png" href="images/chunche.png"/>
	</head>
	<body class="landing is-preload">
	<br><br><br><br>
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1><a href="http://humancomputing30.000webhostapp.com/" target="_blank">Human Computing 3.0</a> by Paulino Berm&uacute;dez</h1>
					<nav id="nav">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="login.php?errorusuario=si" class="button">Login</a></li>
						</ul>
					</nav>
				</header>
    <!-- Main -->
    <section id="main" class="container">
	<br><br>
					<section class="box special">
					<br><br><br><br>
						<header class="major">
                            <h1>Página PHP sin comprobación segura, fuera de la zona segura.</h1>
						</header>
        <p>
            Si <br>
            <li>Sólo omitimos la primer linea con: <br>
                <code>include('seguridad.php')</code> <br>
                Por lo que no haría la comprobación de seguridad, y se podría acceder sin tener que loguearte.
        </p>
        <p>
            <a href="dospaginasegura.php">Volver a la APP</a>
        </p>
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