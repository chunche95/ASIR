<?php include ("seguridad.php"); ?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>THIRD PAGE SECURE</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/style1.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<div id="wrapper">
			<div id="bg"></div>
			<div id="overlay"></div>
			<div id="main">

				<!-- Header -->
					<header id="header">
						<h1>THIRD PAGE SECURE</h1>
                        <p> Human &nbsp;&bull;&nbsp; Computing &nbsp;&bull;&nbsp; 3.0 </p>
                        <p> Sing Up <i><b> OKEY! </i></b> </p>
                        <nav>
							<ul>
								<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
								<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
                            </ul>
                            
							<section class="box" >
								<div class="action">
									<div class="button">
									<button onclick="location.href='unapaginasegura.php'" value="APP1" class="button special icon fa-search">APP 1</button>
									</div>
									<hr>
									<div class="button">
									<button onclick="location.href='dospaginasegura.php'" value="APP2" class="button special icon fa-search">APP 2</button>
									</div>
									<hr>
									<div class="button">
									<button onclick="location.href='salir.php'" value="Salir" class="button special icon fa-search">Salir</button>
									</div>
								</div>
							</section>

						</nav>
					</header>

				<!-- Footer -->
					<footer id="footer">
						<span class="copyright">&copy; Untitled. Design: Paulino E. Bermúdez R.</span>
					</footer>

			</div>
		</div>
		<script>
			window.onload = function() { document.body.classList.remove('is-preload'); }
			window.ontouchmove = function() { return false; }
			window.onorientationchange = function() { document.body.scrollTop = 0; }
		</script>
	</body>
</html>