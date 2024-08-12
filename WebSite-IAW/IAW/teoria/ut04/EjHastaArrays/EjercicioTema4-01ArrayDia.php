<!DOCTYPE HTML>
<!--
	Phantom @ajlkn
-->
<html>
	<head>
		<title>Ejercicio04-01</title>
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
                    <h1> Ejercicio Tema 4 - 01 - Array Dia</h1>
                </header>

                    <p>
					Hacer un script PHP en el que :
                        <i>Examinar el Código</i>
                        <ul>
                            <li> Se cree un array escalar unidimensional de nombre "dia", con los nombres de los días de la semana. </li>
                            <li> Se cree una array asociativo de nombre "mes" en el que se haga corresponder al nombre de cada mes el número de días de dicho mes.</li>
                            <li> Mostrar cada array con la funcion var_dump() y haciendo referencia a cada elemento con un printf en dos bloques separados.</li>
                        </ul>
					<hr>
					</p>
                    <!-- --------------Ejercicio nº 2  del manual-------------------- -->
                    <article class="style1">
                        <?php
                            
                            $dia = array(
                                '0' => "Lunes",
                                '1' => "Martes",
                                '2' => "Miércoles",
                                '3' => "Jueves",
                                '4' => "Vienres",
                                '5' => "Sábado",
                                '6' => "Domingo",
                                );

                            $mes = array(
                                'Enero' => 31,
                                'Febrero' => 28,
                                'Marzo' => 31,
                                'Abril' => 30,
                                'Mayo' => 31,
                                'Junio' => 30,
                                'Julio' => 31,
                                'Agosto' => 31,
                                'Septiembre' => 30,
                                'Octubre' => 31,
                                'Noviembre' => 30,
                                'Diciembre' => 31,
                                );
                            echo "Array's con la funcion var_dump(): <br>";
                            echo '<b><i>Array $dia:</b></i> ';var_dump($dia);
                            echo "<br/>";
                            echo '<b><i>Array $mes:</b></i> ';var_dump($mes);     
                            echo "<br>";
                               
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


