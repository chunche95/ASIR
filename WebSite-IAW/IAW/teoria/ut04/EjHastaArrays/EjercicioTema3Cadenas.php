<!DOCTYPE HTML>
<!--
	Phantom @ajlkn
-->
<html>
	<head>
		<title>Ejercicio03-02</title>
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
                    <h1> Ejercicio Tema 3 - Cadenas.</h1>
                </header>

                    <p>
                        Hacer un script PHP en el que se haga un intento de que cada línea mostrada sea un ejemplo de cada función mostrada en
                        esta página.  
                    <hr>
					</p>
                    <!-- --------------Ejercicio nº 2  del manual-------------------- -->
                    <article class="style1">
                        <table>
                            <tr>
                                <th>Funcion</th>
                                <th>Sintaxis</th>
                                <th>Resultado</th>
                            </tr>
                            <tr>
                                <td><b>chr(n)</b></td>
                                <td>chr(64)</td>
                                <td><?php echo chr(64) ?></td>
                            </tr>
                            <tr>
                                <td><b>ord(cadena)</b></td>
                                <td>ord("Hola")</td>
                                <td><?php echo ord("Hola") ?></td>
                            </tr>
                            <tr>
                                <td><b>strlen(cadena)</b></td>
                                <td>strlen("Hola mundo")</td>
                                <td><?php echo strlen("Hola mundo") ?></td>
                            </tr>
                            <tr>
                                <td><b>strtolower(cadena)</b></td>
                                <td>strtolower("Hola Mundo")</td>
                                <td><?php echo strtolower("Hola Mundo") ?></td>
                            </tr>
                            <tr>
                                <td><b>strtoupper(cadena)</b></td>
                                <td>strtoupper("Hola Mundo")</td>
                                <td><?php echo strtoupper("Hola Mundo") ?></td>
                            </tr>
                            <tr>
                                <td><b>ucwords(cadena)</b></td>
                                <td>ucwords("hola mundo")</td>
                                <td><?php echo ucwords("hola mundo") ?></td>
                            </tr>
                            <tr>
                                <td><b>ucfirst(cadena)</b></td>
                                <td>ucfirst("hola mundo")</td>
                                <td><?php echo ucfirst("hola mundo") ?></td>
                            </tr>
                            <tr>
                                <td><b>ltrim(cadena)</b></td>
                                <td>ltrim("     Hola mundo")</td>
                                <td><?php echo ltrim("   Hola mundo") ?></td>
                            </tr>
                            <tr>
                                <td><b>rtrim(cadena)</b></td>
                                <td>rtrim("Hola mundo     ")</td>
                                <td><?php echo rtrim("Hola mundo    ") ?></td>
                            </tr>
                            <tr>
                                <td><b>trim(cadena)</b></td>
                                <td>trim("     Hola mundo     ")</td>
                                <td><?php echo trim("   Hola mundo   ") ?></td>
                            </tr>
                            <tr>
                                <td><b>substr(cadena,n,m)</b></td>
                                <td>substr("Hola mundo",1,5)</td>
                                <td><?php echo substr("Hola mundo",1,5) ?></td>
                            </tr>
                            <tr>
                                <td><b></b></td>
                                <td>substr("Hola mundo",-1,5)</td>
                                <td><?php echo substr("Hola mundo",-1,5) ?></td>
                            </tr>
                            <tr>
                                <td><b></b></td>
                                <td>substr("Hola mundo",1,-5)</td>
                                <td><?php echo substr("Hola mundo",1,-5) ?></td>
                            </tr>
                            <tr>
                                <td><b></b></td>
                                <td>substr("Hola mundo",-5,-1)</td>
                                <td><?php echo substr("Hola mundo",-5,-1) ?></td>
                            </tr>
                            <tr>
                                <td><b>explode(sep, cad, n)</b></td>
                                <td>explode(" ","Hola mundo he llegado a destruiros a todos",4)</td>
                                <td><?php $a=explode(" ","Hola mundo he llegado a destruiros a todos",4); echo '$a[0]= '.$a[0] ?></td>
                            </tr>
                            <tr>
                                <td><b></b></td>
                                <td></td>
                                <td><?php $a=explode(" ","Hola mundo he llegado a destruiros a todos",4); echo '$a[1]= '.$a[1] ?></td>
                            </tr>
                            <tr>
                                <td><b></b></td>
                                <td></td>
                                <td><?php $a=explode(" ","Hola mundo he llegado a destruiros a todos",4); echo '$a[2]= '.$a[2] ?></td>
                            </tr>
                            <tr>
                                <td><b></b></td>
                                <td></td>
                                <td><?php $a=explode(" ","Hola mundo he llegado a destruiros a todos",4); echo '$a[3]= '.$a[3] ?></td>
                            </tr>
                            <tr>
                                <td><b>implode(sep, array)</b></td>
                                <td>implode(",",$a)</td>
                                <td><?php echo implode(",",$a) ?></td>
                            </tr>
                            <tr>
                                <td><b>crypt(cadena, "xx")</b></td>
                                <td>crypt("Hola mundo", "aa")</td>
                                <td><?php echo crypt("Hola mundo", "aa") ?></td>
                            </tr>
                            <tr>
                                <td><b>md5(cadena, "xx")</b></td>
                                <td>md5("Hola mundo")</td>
                                <td><?php echo md5("Hola mundo") ?></td>
                            </tr>
                            <tr>
                                <td><b>crc32(cadena)</b></td>
                                <td>crc32("Hola mundo")</td>
                                <td><?php echo crc32("Hola mundo") ?></td>
                            </tr>
                        </table>
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


