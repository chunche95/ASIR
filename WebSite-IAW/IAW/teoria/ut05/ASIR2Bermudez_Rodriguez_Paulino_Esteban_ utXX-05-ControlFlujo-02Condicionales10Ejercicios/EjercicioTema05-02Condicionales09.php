<!DOCTYPE HTML>
<!--
	Phantom @ajlkn
-->
<html>
	<head>
		<title>Ejercicio Tema05-09 </title>
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
                    <h1> Ejercicio Tema05-02 Condicionales 09. </h1>
                </header>

                    <p>
                     Pasada	una	cadena	como parámetro	(de	nombre	cadena)	a 
                     un	Script y usando	un	switch como condicional	donde sea posible,
                     mostrar: <br>
                        - Como Header H2 html la propia	cadena y además: El mensaje "Correcto" con atributo
                        resaltado y centrado en	pantalla si contiene el	texto <b>'password'</b> <br>
                        - El valor numérico	del	día	de	la	semana de 0	a 6	si vale 'lunes','martes',... hasta 'domingo' <br>
                        - El texto <b>"Cadena no valida"</b> si	no cumple ninguna de las dos condiciones anteriores. <br>
                     Un	pequeño	formulario al final	que	pida la	propia cadena, llamandose a	sí	mismo el Script	de nuevo.
					<hr>
                    </p>
                    <form action="">
                            Escribe la <i>cadena</i> a evaluar: <input type="text" name="cadena" value="" placeholder="Ingrese cadena"><br>
                            
						<input type="submit" value="Evaluar"> 
                    </form>
                    <!-- --------------Ejercicio nº 9 Condicionales-------------------- -->
                    <article class="style1">
						<?php
							$cadena=0;
							while (++$cadena){
								$cadena=$_GET['cadena'];
								switch($cadena){
									case "0":
										print "Lunes";
										break 2;
									case "1":
										print "Martes";
										break 2;
									case "2":
										print "Miércoles";
										break 2;
									case "3":
										print "Jueves";
										break 2;
									case "4":
										print "Viernes";
										break 2;
									case "5":
										print "Sábado";
										break 2;
									case "6":
										print "Domingo";
										break 2;
									case "password":
										print "<h2 align='center'  style='color: #01c107';>CORRECTO!</h2>";
										break 2;
									default:
										print "<b><h2 style='color: #fe0404 '><i>Cadena inválida!</i></h2></b>";
										break 2;
								}
							}
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

