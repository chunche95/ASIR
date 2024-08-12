<!DOCTYPE HTML>
<!--
	Phantom @ajlkn
-->
<html>
	<head>
		<title>Ejercicio05-08</title>
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
                    <h1> Ejercicio Tema05-02 Condicionales 08</h1>
                </header>

                    <p>
                        Dados dos números enteros pasados como parametros, de nombre inicio y fin, realizar : <br>
                        1. Verificacion de que ambos son positivos, en caso contrario cambiarles el signo. <br>
                        2. Verificacion de que inicio es menor que fin, en caso contrario intercambiar sus valores. <br>
                        3. Recorrer todos los enteros entre ambos y mostrar una linea de mensaje que indique si el número en curso es :
						<ul>
							<li>El valor de inicio o el valor de fin</li>
							<li>Múltiplo de 7</li>
							<li>Termina en 9</li>
							<li>Resulta ser la media de los valores de inicio y fin.</li>
						</ul>
                    <hr>
					</p>
					<form action="">
                            Escribe nº "<i>Inicio</i>": <input type="text" name="Inicio" value="" placeholder="Ingrese un número"><br>
                            Escribe nº "<i>Fin</i>": <input type="text" name="Fin" value="" placeholder="Ingrese un número"><br>
                            
						<input type="submit" value="Verificar"> 
                    </form>
                    
                    <!-- --------------Ejercicio Tema05-02 Condicionales 08-------------------- -->
                    <article class="style1">
                        
						<?php
							
							@$i=$_GET["Inicio"];
							@$j=$_GET["Fin"];
								echo "<b><i>Datos de entrada:</i></b> <br>";
								echo "Inicio &rarr;".$i."<br>";
								echo "Fin &rarr;".$j."<br>";
							/**************************************
							 * Comprobación de números positivos. *
							 **************************************/
							print "<b><i>Números positivos.</i></b> <br>";
							 	if ( ($i < 0) )
									{
										echo "<b>¡Error! Se ha encontrado un número negativo. </b>[ ".$i." ]<br>";
										echo "Cambiando valor a positivo ... <br> **50%** <br>";
										echo "******100%****** <br>";
										$cambioini=($i*(-1));
										echo "Nº Inicio ".$cambioini."<br>"; //Cambiamos el signo del número de inicio
										echo "<br>";
									}else{
										echo "<b>OK! </b><br>";
									}
								if ( ($j < 0) )
									{
										echo "<b>¡Error! Se ha encontrado un número negativo. </b>[ ".$j." ]<br>";
										echo "Cambiando valor a positivo ... <br> ==50%== <br>";
										echo " =====100%===== <br>";
										$cambiofin=($j*(-1));
										echo "Nº Final ".$cambiofin . "<br>";	 // Cambio de signo de número final.
										
												/***************************************
												 *	 Comprobación de $i<$cambiofin	   *
												 ***************************************/
												print "<i><b>Inicio es menor que Fin.</i></b> <br>";
												$nuevoi=$j;
												$nuevoj=$i;
												if($cambiofin<$i){
													echo $cambiofin." es menor que ". $i ."<br>";
													$i=$nuevoj;
													$cambiofin=$nuevoi;	
													echo $nuevoi." es el nuevo número inicio <br>"; 
													echo $nuevoj." es el nuevo número fin <br>";
													/******************************************************************
													 * Como Inicio($i) es mayor que Fin($j), cambiamos el orden 	  *
													 * de los números ahora, Fin es el inicio y Inicio es el final.   *
													 ******************************************************************/
												}else{
													echo "OK! <br>";
												}
												print "<hr>";

									} else {
										echo "<b>OK!</b><br>";

												/***************************************
												 *		 Comprobación de $i<$j		   *
												***************************************/
												print "<i><b>Inicio es menor que Fin.</i></b> <br>";
												$nuevoi=$j;
												$nuevoj=$i;
												if($j<$i){
													echo " &rarr; ".$j." es menor que ". $i ."<br>";
													$i=$nuevoj;
													$j=$nuevoi;	
													echo $nuevoi." es el nuevo número <b>inicio</b> <br>";
													echo $nuevoj." es el nuevo número <b>fin</b> <br>";
												}else{
													echo "OK! <br>";
												}
												print "<hr>";
									}
									print "<hr>";
										
							/****************************************
							 * 			Multiplos de 7				*
							*****************************************/
							print "<i><b>Múltiplos de 7.</i></b><br>";
							if ( ($i%7==0 || $nuevoi%7==0) ){
								print $i." Es múltiplo de 7 ";
							}else{
								print $i." No es múltiplo de 7 ";
							}
							print "<br>";
							if( ($j%7==0 || $nuevoj%7==0) ){
								print $j." Múltiplo de 7 <br>";
							}else{
								print $j." No es múltiplo de 7 ";
							}
							print "<hr>";
							/************************************
							 * 			Termina en 9			*
							 ************************************/
							print "<i><b>Termina en 9.</i></b><br>";
							$buscaren=@$cambioini || $buscaren = @$cambiofin || $buscaren = @$i || $buscaren = @$j;
							@$encontrar=9;
							$pos = strpos($buscaren, $encontrar);
							if($pos === false){
								print " Un 9 si no fue encontrado. <br>";
							}else{
								print "Nueve en ". $buscaren . "existe en: ". $pos;
							}
							print "<hr>";
							/********************************************
							 * Media de los valores entre inicio y fin  *
							 ********************************************/
								@$media=0;	
							print "<b>Secuencia-media.</b> <br>";
							if($i<$j) 
							{
								$media=($i+$j)/2;
								print "La media es: ". $media;
							}else{ 
								$media=($j+$i)/2;
								print "La media es: ". $media;
							}


						
						
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

