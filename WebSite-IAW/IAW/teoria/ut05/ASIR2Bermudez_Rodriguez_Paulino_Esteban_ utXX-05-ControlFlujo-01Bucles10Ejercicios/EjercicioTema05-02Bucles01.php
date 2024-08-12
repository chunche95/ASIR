<!DOCTYPE HTML>
<!--
	Phantom @ajlkn
-->
<html>
	<head>
		<title>Ejercicio05-02</title>
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
                    <h1> Ejercicio05-01 Bucles 02</h1>
                </header>

                    <p>
                    Construir un Script	PHP	que	calcule	el factorial de un valor numérico
                    introducido	como parámetro. (Dato:N!=Nx(N-1)x(N-2)x(N-3)....3x2x1;
                    Ejemplo 5!=5x4x3x2x1=>5!=120).
					<hr>
					</p>
                    <!-- --------------Lectura del numero inicial-------------------- -->
                    <form action="">
                          <label for="numero"></label>
                           <input type="text" name="numero" placeholder="Ingrese un número"><br>
                            <input type="submit" value="Muestrame su factorial"> 
                    </form>
                    <!-- --------------Ejercicio nº 2 Bucles-------------------- -->
                    <article class="style1">
                                <?php
                                   
                                    $num=$_GET[numero];             /* Leo el numero de entrada */
                                    $factorial=1;                   /* Con multiplicaciones iterativas SIEMPRE iniciar a 1, no a 0 */
                                    
                                    /* Bucle FOR */
                                    print "El número es: ".$num. "<br>";
                                    for($contador=1; $contador <= $num; $contador++) 
                                    {
                                      /*  print "<hr>Parámetro de entrada: ".($contador). "<br>"; */
                                        $factorial=$factorial*$contador; //Calculo del factorial.
                                      /* echo "La multiplicación es igual a: ". $factorial. "<br>"; */
                                    }
                                    echo "El factorial de ". $num . " es: ". $factorial."<br>";
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

