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
                    <h1> Ejercicio05-01 Bucles 01</h1>
                </header>

                    <p>
					Construir un Script	PHP	que	visualice por pantalla todos los caracteres
                    correspondientes a letras minúsculas del ASCII standart usando	un bucle for. 
					<hr>
					</p>
                    <!-- --------------Ejercicio nº 1 Bucles-------------------- -->
                    <article class="style1">
                        <?php 
                            /* Consulta de los caracteres estandar de ASCII https://ascii.cl/es/ */
                            /* Códigos ASCII de las letras minusculas. */

                                for ($ascii = 97; $ascii <= 122; $ascii++)
                                    {
                                       $codigo=("echo $ascii"); 
                                       echo $ascii. ' ';
                                    }
                                    echo "<br>";
                           /* Caracter de las letras minusculas. */
                                for($simb = 'a'; $simb != 'aa'; $simb++)
                                    {
                                        $letra=("echo $simb");
                                        echo $simb. ' ';
                                    }  
                                    echo "<hr>";
                                    echo "<table>";
                                    echo "<tr align=center>";
                                    echo "<td> $letra </td>";
                                    echo "<td> --> </td>";
                                    echo "<td> $codigo </td>";
                                    echo "</table>";
                                
                               /* echo '<b> Símbolo.</b>';*/
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


