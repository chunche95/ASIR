<!DOCTYPE HTML>
<!--
	Phantom @ajlkn
-->
<html>
	<head>
		<title>Ejercicio05-10</title>
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
                    <h1> EjercicioTema05-01Bucles10	(Ejercicio	EXTRA)</h1>
                </header>

                    <p>
                        Se	puede	calcular el	numero	PI	con	la	siguiente fórmula
                        y aproximarse según	el número de términos de la	serie 
                        PI = 4 x (1-1/3+1/5-1/7+1/9-..............PI=4x((-1)^(i+1)/(2i-1)) con i=1,2,3....... 
                        Hacer un Sript PHP que calcule	el	valor obtenido de la constante	PI	para
                        i=1,2,3.... y así hasta	el	número	pasado como parámetro y	verificar que cada vez más
                        nos	acercamos al valor de PI = 3.1415926535897932.... 
                    <hr>
                    </p>
                    <form action="">
                            Escribe "<i>i</i>": <input type="text" name="i" value="" placeholder="Ingrese un número"><br>
                            
						<input type="submit" value="Calcula PI"> 
                    </form>
                    <!-- --------------Ejercicio nº 10 Bucles-------------------- -->
                    <article class="style1">
                        <?php
                            print "<b>Formula 1. <i>Con n=0</i></b> <br>";
                            @$solucion=0;
                            @$contador=0;
                            @$i=$_GET["i"];
                            /* *************** */
                            print "<i>Datos inciales:</i> <br>";
                            
                            print "- Inicio: ".$contador;
                            print "<br>";
                            print "- Entrada y fin de ciclo: ".$i;
                            print "<br>";
                            print "- Solucion: ".$solucion;
                            print "<hr>";
                            /* ***************** */
                            for($contador=0 ; $contador<=$i ; $contador++)
                            {

                            /* ************************************************************************ */
                            /* Cálculo del exponencial y la fracción inferior de la fórmula de Liebniz. */
                            /* ************************************************************************ */
                                
                            // Calculos.
                            @$exponencial=(pow(-1,$contador)); //Exponencial de (-1)^$i. Siendo $i el parametro inicial de entrada.
                            @$fraccion=(2*$contador+1);        //Multiplicación inferior de la fórmula.
                            @$solucion=$solucion+(4*$exponencial)/$fraccion;
                               
                            // Muestra por pantalla.
                            print "Ciclo de ejecución: ".$contador. "<br>";
                            print "El resultado de la exponencial es: ". $exponencial. "<br>";
                            print "El resultado de la fracción es: ". $fraccion. "<br>";
                            print "PI es: ". $solucion. "<hr>";
                            }


                        /***********************************************************************************************
                         NOTA:
                            Por defecto al iniciar la ejecución del programa tendremos como resultados que son '1', 
                            es lógico debido a que realiza una ejecución inicial del programa y hace los calculos, 
                            saliendo por ende su correspondiente resultado. 1 
                        ***********************************************************************************************/
                            
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

