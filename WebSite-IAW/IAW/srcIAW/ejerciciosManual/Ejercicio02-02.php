<!DOCTYPE HTML>
<!--
	Phantom @ajlkn
-->
<html>
	<head>
		<title>Ejercicio02-02</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Main -->
		<div id="main">
            <div class="inner">
                <header>
                    <h1> Ejercicio02-02</h1>
                </header>

                    <p>
                    Crea un subdirectorio en el root de tu servidor Apache (htdocs si usas Windows, /var/www si utilizas Ubuntu) y ponle como nombre practicas.
                    Escribe con tu editor un script similar al ejemplo6.php utilizando print y print() en vez de print. Guarda el documento en la carpeta practicas con el nombre ejercicio2.php y comprueba su funcionamiento.
                    Recuerda que para visualizarlo deberás escribir en tu navegador:
                    http://localhost/practicas/ejercicio2.php <br>



                    </p>
                    <!-- --------------Ejercicio nº 2  del manual-------------------- -->
                    <article class="style1">
                        <?php 
                            
                            /* Uso de la instrucción 'print()' para imprimir por pantalla con PHP.*/
                            
                            
                            /* Comentario entre comillas */
                            print ("Este texto solo lleva las comillas de la instrucción<br>");

                            /* anidado de comillas simples y dobles */
                            print ("La palabra 'comillas' aparecerá entrecomillada<br>");

                            /* Uso de comilla simple para encasillar otra palabra con comilla doble */
                            print ('La palabra "comillas" aparecerá entrecomillada<br>');

                            /* Uso de comillas para encasillar una palabra con \"...\" */
                            print ("La palabra \"comillas\" usando la barra invertida<br>");

                        ?>
                    </article>
            </div>
        </div>

        <!-- Footer -->
		<footer id="footer">
			<div class="inner">
				<section>
					<h2>Get in touch</h2>
					<form method="post" action="#">
						<div class="fields">
							<div class="field half">
								<input type="text" name="name" id="name" placeholder="Name" />
							</div>
							<div class="field half">
								<input type="email" name="email" id="email" placeholder="Email" />
							</div>
							<div class="field">
								<textarea name="message" id="message" placeholder="Message"></textarea>
							</div>
						</div>
						<ul class="actions">
							<li><input type="submit" value="Send" class="primary" /></li>
						</ul>
					</form>
				</section>
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


