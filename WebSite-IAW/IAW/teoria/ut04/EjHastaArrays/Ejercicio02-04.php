<!DOCTYPE HTML>
<!--
	Phantom @ajlkn
-->
<html>
	<head>
		<title>Ejercicio02-04</title>
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
                    <h1> Ejercicio02-04</h1>
                </header>

                    <p>
                    Visualizar el Enunciado y Resultado de :
                        sin(3PI/2) = ....
                        log(e^5) = ....
                        cos( 137(Octal) ) = ....
                        Número Aleatorio entre 0 y 1 = ....
                        Número formateado del resultado de 1000 x cos(54.45) (Separador de miles = "<b>.</b>" y la " <b>'</b> " para separar decimales) = ....
                        Valor del Seno( Coseno ( PI ) ) = .....
                        Pasar el número 123456789 a Base 20 = .....
                        <br>
                        <blockquote><cite> NOTA: Los cálculos trigonométricos que se realizan en el ejercicio, sus resultados vienen dados en RADIANES.</cite></blockquote>
					<hr>
					</p>
                    <!-- --------------Ejercicio nº 4  del manual-------------------- -->
                    <article class="style1">
                        <?php 
                            
							/* Código PHP que visualiza el resultado de los apartados anteriores.*/
                        echo "sin(3*PI/2) = ";
                            print sin(3*PI()/2);
                        echo "<br>";

                        echo "log(e^5) =  ";
                            print log10(exp(5));
                        echo "<br>";
                        echo "cos( 137(Octal) ) =  ";
                            print cos(95). "\n" ;
                            echo "<br>";
                            echo "El número decimal de 0137 [octal] es: " .  octdec('0137') ;
                        echo "<br>";
                        echo "Número Aleatorio entre 0 y 1 =  ";
                            print rand(0 , 1);
                        echo "<br>";
                        echo "Número formateado del resultado de 1000 x cos(54.45) = ";
                            print number_format((1000*cos(54.45)), 2 , "." , "'");
                        echo "<br>";
                        echo "Valor del Seno( Coseno ( PI ) ) = ";
                            print sin(cos(PI()));
                        echo "<br>";
                        echo " Pasar el número 123456789 a Base 20 =";
                           echo base_convert ( 123456789,10 , 20 );
                        echo "<br>";
                        
						?>
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


