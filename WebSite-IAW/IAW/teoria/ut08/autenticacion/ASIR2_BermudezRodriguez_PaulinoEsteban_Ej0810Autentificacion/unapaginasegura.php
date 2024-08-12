<?php include ("seguridad.php"); ?>  <?php //aplicacionsegura01.php ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>FIRST PAGE SECURE.</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
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
							<li>User: <a href=""><?php echo $_SESSION["usuario"]; echo "  (Id de Sessi&oacute;n : ". session_id().")"?> </a></li>
						</ul>
					</nav>
				</header>
            <!-- Banner -->
            <section id="banner">
                <h2>Bienvenido! Has iniciado sesi&oacute; con &eacute;xito. </h2>
            </section>		
			<!-- Main -->
				<section id="main" class="container">
                <br><br><br><br><br><br><br>
					<div class="box">

                    <h2> Categoría - Desarrollo Web. </h2>
                        <pre>
Dentro de la categoría de desarrollo web de Human Computing podrás encontrar todo lo necesario
para aprender a crear o desarrollar sitios web. <br>
Esta es la categoría con más artículos publicados ya que, además de ser el tema más solicitado
por la enorme demanda de profesionales en este sector, existen muchos campos específicos
relacionados con el desarrollo web, tales como la programación de backend o frontend, las hojas
de estilos o las bases de datos. <br>
También podemos encontrar CMS para crear sitios web fácilmente, así como multitud de frameworks
tanto para el lado del cliente como del servidor. <br>
Si estás empezando a aprender desarrollo web desde cero, no te dejes intimidar: no es tan 
complicado como parece. <br>
Vamos a hacerte una pequeña ruta para que conozcas los pasos a seguir para llevar un orden 
sencillo y lógico en tu aprendizaje. Con esto y nuestros tutoriales sobre desarrollo web ya no
hay nada que te pueda detener. <br>
Si lo que deseas es crear sitios webs pero no te interesa entender como funcionan o aprender a
programar, tu opción está clara: <b>el CMS Wordpress.</b> <br>
Si por el contrario quieres aprender a desarrollar, te sugerimos que empieces con lo más básico,
con la parte del frontend: HTML, CSS y Javascript. <br>
Después de este punto seguramente te interesará aprender a desarrollar algo de backend, que al 
fin y al cabo es lo que hace que una web funcione. <br>
Te recomendamos PHP o Java. Una vez tengas esto controlado, te animamos a aventurarte con los
frameworks; seguramente te vendrá de perlas aprender a utilizar jQuery o Angular para el frontend,
Bootstrap para el diseño, Laravel para el backend… las opciones son infinitas! <br>
Si tienes dudas siempre puedes preguntar en los comentarios, y si no encuentras lo que buscas,
mandanos un mensaje y lo antes posible resolveremos tus problemas. <br>
Esperamos que nuestros tutoriales sobre desarrollo web te sean de utilidad. <br>

<i>BIENVENIDO A HUMAN COMPUTING 3.0</i>
                        </pre>
                <section class="box" >
                    <div class="action">
                        
                        <div class="button">
                        <button onclick="location.href='dospaginasegura.php'" value="APP2" class="button special icon fa-search">APP 2</button>
                        </div>
                        <hr>
                        <div class="button">
                        <button onclick="location.href='salir.php'" value="Salir" class="button special icon fa-search">Salir</button>
                        </div>
                    </div>
                </section>
            </section>
            </div>
        </div>
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