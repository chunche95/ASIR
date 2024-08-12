<!DOCTYPE HTML>
<!--
	Phantom @ajlkn
-->
<html>
	<head>
		<title>Ejercicio05-04</title>
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
                    <h1> Ejercicio05-01 Bucles 04</h1>
                </header>

                    <p>
                     Calcular la media de los tres números pasados como parámetros llamados a,b	y c.
					<hr>
					</p>
                    
                    <form action="">
						    
						    A: <input type="text" name="a" value="" placeholder="Ingrese un número"><br>
							B: <input type="text" name="b" value="" placeholder="Ingrese un número"><br>
							C: <input type="text" name="c" value="" placeholder="Ingrese un número"><br>
                    	<input type="submit" value="Calcula la media"> 
                    </form>
                    <!-- --------------Ejercicio nº 3 Bucles-------------------- -->
                    <article class="style1">
						<?php
							@$a = $_GET['a']; 										// Leo el 1er nº.
							@$b = $_GET['b']; 										// Leo el 2do nº.
							@$c = $_GET['c']; 										// Leo el 3er nº.
							@$suma=($a+$b+$c);									// Suma 3 notas.
							echo "La suma de los 3's números es: ". $suma."<br>";	
							@$media=($suma/3);									// Media.
							echo "La media de los 3's números es: ". $media;
							
						?>
                               <br>
                               
                        <hr>
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

