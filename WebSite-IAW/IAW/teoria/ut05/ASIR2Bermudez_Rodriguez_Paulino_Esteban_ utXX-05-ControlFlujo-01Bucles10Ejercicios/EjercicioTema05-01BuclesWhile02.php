<!DOCTYPE HTML>
<!--
	Phantom @ajlkn
-->
<html>
	<head>
		<title>Ejercicio05-01</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Main -->
		<div id="main">
            <div class="inner">
                <header>
                    <h1>Ejercicio05-01</h1>
                </header>
					<form action="">
                            <label for="inicio"></label>
							<input type="text" name="inicio" placeholder="Ingrese un número"><br>
							<label for="fin"></label>
							<input type="text" name="fin" placeholder="Ingrese el fin del contador"> <br>
                            <input type="submit" value="Mostrar contador">
                    </form>
                    <p>
                    Script PHP en el que muestren todos los numeros enteris, separados por ":", entre  dos numeros 
                    pasados como parámetros de nombre 'inicio' y 'fin' al script usando un bucle while.
					<hr>
					</p>
                    <!-- --------------Ejercicio nº 2  del manual-------------------- -->
                    <article class="style1">
						<?php
							$inicio=$fin=0;
							$inicio=(isset($_GET['inicio']));
							$fin=(isset($_GET['fin']));
							for($i=$inicio;$i<=$fin;$i++){
								printf("<br>Nº ".$i );
							}
						?>
						
                    </article>
            </div>
        

        <!-- Footer -->
		<footer id="footer">
			<div class="inner">
				<section>
					<h2>Follow</h2>
					<ul class="icons">
						<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon style2 fa-github"><span class="label">GitHub</span></a></li>
						<li><a href="#" class="icon style2 fa-500px"><span class="label">500px</span></a></li>
						<li><a href="#" class="icon style2 fa-phone"><span class="label">Phone</span></a></li>
						<li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
					</ul>
				</section>
				<ul class="copyright">
					<li>&copy; Human Computing 3.0. All rights reserved</li><li>Design: Paulino E. Bermúdez R.</li>
				</ul>
			</div>
		</footer>
</div>


<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>


