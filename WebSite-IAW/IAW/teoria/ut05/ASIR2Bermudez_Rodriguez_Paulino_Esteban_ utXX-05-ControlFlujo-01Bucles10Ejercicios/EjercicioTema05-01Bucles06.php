<!DOCTYPE HTML>
<!--
	Phantom @ajlkn
-->
<html>
	<head>
		<title>Ejercicio05-06</title>
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
                    <h1> EjercicioTema05-01 Bucles06</h1>
                </header>

                    <p>
                    Calcular la media de los números enteros que existen entre	dos	numeros	pasados	como
                    parametros,	de nombre inicio y fin,ambos incluidos. 
					<hr>
                    </p>
                    <form action="">
						    Inicio: <input type="text" name="ini" value="" placeholder="Ingrese un número"><br>
							Fin: <input type="text" name="fin" value="" placeholder="Ingrese un número"><br>
						<input type="submit" value="Calcula la media"> 
                    </form>
                    <!-- --------------Ejercicio nº 6 Bucles-------------------- -->
                    <article class="style1">
                        <?php
                            @$ini = $_GET['ini']; 										// Leo el 1er nº.
							@$fin = $_GET['fin']; 										// Leo el 2do nº.
                            @$contador = 1;
                        /* ******************************************** */
                            echo "El nº de inicio es: ".$ini."<br>";
                            echo "El nº de fin es: ".$fin."<hr>";
                        /* ******************************************** */
                            
                            for($calcula=$fin;$calcula>=$ini;$calcula++)
                            {
                                @$inicio+=$calcula;
                                echo "El nº es:".$calcula."<br>";                     //Listado de los nºs.
                                @$contador++;
                            }
                             echo "Contador de vueltas:".$contador. "<br>";            // Contador de vueltas de carro.
                             echo "La suma es: ".$inicio. "<hr>";                      // Suma media de los parametros.
                             $media=($inicio/$contador);                               // Calculo de la media de los nºs.
                             echo "La media es: ". $media                              // Muestra por pantalla.
                             
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

