<!DOCTYPE HTML>
<!--
	Phantom @ajlkn
-->
<html>
	<head>
		<title>Ejercicio01-04</title>
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
                    <h1> Ejercicio01-04</h1>
                </header>

                    <p>
                    Escribir un programa que calcule y muestre el primer número natural para el cual 
                    la suma de él más sus antecesores naturales desde 0 es mayor a 125.<br>
                        Debes de construir un módulo aparte a incluir con la función antecesor($numero) 
                    que retorne la suma de los antecesores del parametro pasado.
                    <br>
                    <hr>
                    </p>
                    
                    <!-- --------------Ejercicio nº 4 del manual-------------------- -->
                    <article class="style2">
                        
                        <?php  

                            /* Declaro las variables */
                            @$suma=1;      /*Iniciamos a 1 porque la suma del primer contador da 0 */
                            
                           /* Llama al archivo antecesor.php que tiene la funcion, pero no escribe nada por pantalla*/
                           include("./antecesor.php"); 
                            /* Escribimos por pantalla el resulatado de la funcion */
                           printf("<b><i><u>El  número natural es: </u></i></b>".antecesor($contador)."<br>");
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


