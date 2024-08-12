<!DOCTYPE HTML>
<!--
	Phantom @ajlkn
-->
<html>
	<head>
		<title>Ejercicio05-20</title>
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
                    <h1> EjercicioTema05-01 Bucles20</h1>
                </header>

                    <p>
                    Hacer una tabla con tantas filas y columnas como le indiquemos como parámetros de nombre filas y columnas.
                    En cada celda se visualizará su posición
                    <hr>
                    </p>
                    <form action="">
                            Escribe "<i>nº de filas</i>": <input type="text" name="fila" value="" placeholder="Ingrese un número"><br>
                            Escribe "<i>nº de columnas</i>": <input type="text" name="columna" value="" placeholder="Ingrese un número"><br>
                            
						<input type="submit" value="Dibujar tabla"> 
                    </form>
                    <!-- --------------Ejercicio Tema05-01 Bucles20-------------------- -->
                    <article class="style1">
                        <?php
                        @$f = $_GET['fila']; 										// Leo las filas.
                        @$c = $_GET['columna'];                                     // Leo las columnas.
                        print "<div class='inner'>";
                        print "<table>";
                            print "<th>";
                            print "<i><b>Creación de tablas dinámicas.</b></i>";
                            print "</th>"."<br>";
                            /*
                            * Contadores de ciclo.
                            */
                            @$param1=1;
                            @$param2=1;
                            /* 
                            * Uso de un for anidado, pues para la creacion de una fila es necesario crear antes una columna.
                            * Traduzcase a que creamos primero los 'tr' antes que los 'td'.
                            */


                            for($param2=1; $param2<=$c ; $param2++)
                            {
                                $imprimimecolumna=(print "<tr></tr>");
                                $imprimimecolumna*=$param2;
                            
                            for($param1=1 ; $param1<=$f ; $param1++ )
                            {
                                
                                $imprimimefila=(print "<td>".$param1.",".$param2."</td>");
                                $imprimimefila*=$param1;
                            }
                            }
                        print "</table>";
                        print "</div>";
                            
                            print "<hr>";
                            print "Entrada FILA  &rarr; ".$f."<br>";
                            print "Entrada COLUMNA  &rarr; ".$c."<br>";
                            print "<hr>";
                            print "Veces que ejecuta el ciclo FILA  &rarr; ".$param1."<br>";
                            print "Veces que ejecuta el ciclo COLUMNA  &rarr; ".$param2."<br>";
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

