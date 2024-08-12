<!DOCTYPE HTML>
<!--
	Phantom @ajlkn
-->
<html>
	<head>
		<title>Ejercicio05-07</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Main -->
		<div id="main">
            <div class="inner">
                <a href="index.html" class="button">Volver al inicio</a> <br>
                <header>
                    <h1> Ejercicio Tema05-02 Condicionales 07</h1>
                </header>

                    <p>
                        Calcular la media de los números pares que existen entre 7 y 531.
                    <hr>
                    </p>
                    
                    <!-- --------------Ejercicio Tema05-07 Condicionales-------------------- -->
                    <article class="style1">
                        <p>
                        <?php
                            @$inicio=7;
                            @$fin=531;
                            @$contador=0;
                            @$suma=0;
                            print "Los números pares son: <br>";
                                
                            for($i=$inicio; $i<=$fin;$i++)
                            {
                                
                                
                                if($i%2){
                                    print " ";
                                }else{
                                    print $i."+";
                                    $contador++;
                                    $suma+=$i;
                                }
                                
                            }
                            
                            print "<hr>";
                            print "La suma es: ".$suma."<br>";
                            print "Contador: ".$contador;
                            print "<br>";
                            $media=$suma/$contador;
                            print "<b>La media es:</b> ".$media;
                        ?>
                        </p>
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

