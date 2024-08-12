<!DOCTYPE HTML>
<!--
	Phantom @ajlkn
-->
<html>
	<head>
		<title>Ejercicio05-03</title>
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
                    <h1> Ejercicio05-01 Bucles 03</h1>
                </header>

                    <p>
                     Construir un Script	que	muestre	todos los valores de los numeros enteros factoriales desde
                     1	hasta el número introducido	como parámetro.
					<hr>
					</p>
                    
                    <form action="">
						  <label for="numero" ></label>
						   <input type="text" name="numero" placeholder="Ingrese un número"><br>
                            <input type="submit" value="Muestrame su factorial"> 
                    </form>
                    <!-- --------------Ejercicio nº 3 Bucles-------------------- -->
                    <article class="style1">
                                <?php
                                   
                                    @$num=$_GET[numero];             /* Leo el numero de entrada */
                                    $factorial=1;                   /* Con multiplicaciones iterativas SIEMPRE iniciar a 1, no a 0 */
                                    
                                    /* Bucle FOR */
                                    print "El número es: ".$num."<br>";
                                    for($contador=1; $contador <= $num; $contador++) 
                                    {
                                       print "<hr>Parámetro de entrada: ".($contador). "<br>";  // Entrada
                                        $factorial=$factorial*$contador; //Calculo del factorial.
                                       echo "La multiplicación es igual a: ". $factorial. "<br>"; //Calculo el factorial del nº de entrada
                                    }
                                    echo "El factorial de ". $num . " es: ". $factorial."<br>"; // Factorial del parametro inicial.
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

