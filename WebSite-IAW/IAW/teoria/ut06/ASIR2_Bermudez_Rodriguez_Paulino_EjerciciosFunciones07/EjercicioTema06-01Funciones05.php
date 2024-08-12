<!DOCTYPE HTML>
<!--
	Phantom @ajlkn
-->
<html>
	<head>
		<title>Ejercicio01-05</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Main -->
		<div id="main">
            <div class="inner">
			<a href="index.html" class="button" >Volver atrás</a> <br><br>
                <header>
                    <h1> Ejercicio01-05</h1>
                </header>

                    <p>
                        - Escribir un programa que recorra los números naturales desde cero, e imprima 
                        por pantalla los veinte primeros múltiplos de cinco. <br>
                        - Debes implementar un módulo aparte a incluir con la función multiplo($a,$b) ,
                        que retorna cierto si $a es múltiplo de $b.
                    <br>
                    <hr>
                    </p>
                    
                    <!-- --------------Ejercicio nº X  del manual-------------------- -->
                    <article class="style2">
                        
                        <?php
						@$a=1;
						@$b=5;
                        @$contador=0;
                        @$multiplos=100; /* Porque 5*20 = 100 */
                         /* Llamamos al archivo externo que busca los multiplos de 5 */
                        include("./multiplosDeCinco.php");
                        for($a=1;$a<=$multiplos;$a++){
                            
							printf(multiplo($a,$b)); /* Llama la division de a/b=0 */
							if($a%$b==0){
								printf ("<b>El numero: </b>". $a ."  es múltiplo de 5. <br>");
								printf ($a."  --OK!-- <br>");
							}
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


