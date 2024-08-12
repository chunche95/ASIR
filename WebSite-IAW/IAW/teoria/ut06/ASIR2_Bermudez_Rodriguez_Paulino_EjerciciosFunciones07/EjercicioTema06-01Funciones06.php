<!DOCTYPE HTML>
<!--
	Phantom @ajlkn
-->
<html>
	<head>
		<title>Ejercicio01-06</title>
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
                    <h1> Ejercicio01-06</h1>
                </header>

                    <p>
                        - Escribir un Script que contenga una función que devuelva la media de
                         los n primeros números impares, pasando N como parámetro. <br>
                        - Debes de hacer uso de la función multiplo definida del ejercicio anterior.
                    <br>
                    <hr>
                    </p>
                    <form action="">
                        <label for="">Hacer la media de los impares.</label>
                            <input type="text" name="n" placeholder="Ingrese el número "><br>
                            <input type="submit" value="Mostrar resultado">
                    </form>
                    
                    <!-- --------------Ejercicio nº 6  del manual-------------------- -->
                    <article class="style2">
                        
                        <?php
                            /* Llamamos al archivo externo que busca los multiplos de 5 */
                            include("./multiplosDeCinco.php");
                            /* Declaración de variables */
                            @$n=$_GET['n'];       /* Parámetro de entrada por usuario */
                            @$ini=1;                             /* Parámetro de entrada inicial */
                            @$cuenta=0;                          /* Sumador de impares */
                            @$vuelta=0;                          /* Contador de bucle */
                            
                            
                            for($ini=1;$ini<=$n;$ini++){
                                
                                if(!multiplo($ini,2)){ 
                                    /* Llama la division de ini/2=0 */
                                        /* printf("Vuelta nº: ".$vuelta."<br>");   --> Nº de vueltas hechas del bucle*/
                                        $cuenta+=$ini;
                                        printf("  Nº ".$ini);
                                        printf("  &rarr;  La suma va por: ".$cuenta."<br>");
                                        $vuelta++;
                                        
                                }/* else{
                                    printf($ini."No es impar. <hr>");
                                } */
                            }
                            printf("La media es: ".$cuenta/$vuelta);
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


