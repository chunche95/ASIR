<!DOCTYPE HTML>
<!--
	Phantom @ajlkn
-->
<html>
	<head>
		<title>Ejercicio02-02</title>
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
                    <h1> Ejercicio02-02</h1>
                </header>

                    <p>
					Visualizar el resultado de(~6+1). ¿Qué número te sale?. ¿Sabes por qué?. <br>
					Averigua que es el Complemento A2, para qué se usa y porqué.
					<hr>
					</p>
                    <!-- --------------Ejercicio nº 2  del manual-------------------- -->
                    <article class="style1">
                        <?php 
                            
							/* Código PHP que ejecuta el resultado de (~6+1) y da su resltado por pantalla. */
							echo "(~6+1)=".(~6+1);
						?>
						<hr>
						<blockquote>
							<cite>
							Como resultado de la ejecución de (~6+1) tenemos: <b>-6.</b> <br>
							El motivo por el que obtenemos "-6" es debido a que calculamos el complemento A1 del número,
							teniendo un '-7' como resultado, sin embargo, sumamos un +1 al complemento C<sub>1</sub> para obtener
							la representación del número negativo (C<sub>2</sub>).  <br>
							<b>Complemento A2 (C<sub>2</sub>)</b>:Este es un sistema que nos permite representar números binarios de forma negativa, 
							en donde el MSB (Bit mas Significativo) es el bit del signo. <br>
							Si este bit es 0 entonces el número binario es positivo (+),si el bit del signo es 1,
							entonces el número es negativo(-). <br>
							El complemento a dos es la forma más usada en computación de <b>poner un número binario entero en forma negativa</b>. <br>
							Para poner un número en complemento a dos debemos tener en cuenta que el número binario deberá estar empaquetado,
							esto es con un formato fijo de <i> 8, 16 o 32 </i> bits según sea necesario su tamaño. 
							<ul>
								<li>
									Si el número es menor que 127 se puede usar 8 bits
								</li> 
								<li>
									Si el número es menor que 32768 se puede usar 16 bits
								</li>
								<li>
									Si el número es menor que 2147483648 se puede usar 32 bits
								</li>
							</ul>

							</cite>
						</blockquote>

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


