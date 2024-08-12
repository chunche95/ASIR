<!DOCTYPE HTML>
<!--
	Phantom @ajlkn
-->
<html>
	<head>
		<title>Ejercicio03-01</title>
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
                    <h1> Ejercicio02-04</h1>
                </header>

                    <p>
                        Hacer un script PHP en el que se haga un intento de que cada línea mostrada sea un ejemplo
                        de cada función mostrada en esta página.
                    <hr>
					</p>
                    <!-- --------------Ejercicio nº 6  del manual-------------------- -->
                    <article class="style1">
                        <!-- líneas mostradas. -->
                                <table>
                                    <tr>
                                        <th>Caracter</th>
                                        <th>Valor</th>
                                        <th>Sintaxis</th>
                                        <th>Resultado</th>
                                    </tr>
                                    <tr>
                                        <td>Decimal</td>
                                        <td>0</td>
                                        <td>printf("%020d",32)</td>
                                        <td><?php printf("%020d",32) ?></td>
                                    </tr>
                                    <tr>
                                        <td>Entero</td>
                                        <td>14</td>
                                        <td>printf("%'*14d",32)</td>
                                        <td><?php printf("%'*14d",32) ?></td>
                                    </tr>
                                    <tr>
                                        <td>Entero</td>
                                        <td>17</td>
                                        <td>printf("%'*-17d",32)</td>
                                        <td><?php printf("%'*-17d",32) ?></td>
                                    </tr>
                                    <tr>
                                        <td>Decimal</td>
                                        <td>14.5</td>
                                        <td>printf("%'*14.5d",32)</td>
                                        <td><?php printf("%'*14.5d",32) ?></td>
                                    </tr>
                                    <tr>
                                        <td>Decimal</td>
                                        <td>17.8</td>
                                        <td>printf("%'*-17.8d",32)</td>
                                        <td><?php printf("%'*-17.8d",32) ?></td>
                                    </tr>
                                    <tr>
                                        <td>Decimal</td>
                                        <td>14.5</td>
                                        <td>printf("%'*14.5f",32)</td>
                                        <td><?php printf("%'*14.5f",32) ?></td>
                                    </tr>
                                    <tr>
                                        <td>Decimal</td>
                                        <td>11.8</td>
                                        <td>printf("%'*-11.8f",32)</td>
                                        <td><?php printf("%'*-11.8f",32) ?></td>
                                    </tr>
                                    <tr>
                                        <td>Binario</td>
                                        <td>b</td>
                                        <td>printf("%'*14b",17)</td>
                                        <td><?php printf("%'*14b",17) ?></td>
                                    </tr>
                                    <tr>
                                        <td>Flotante</td>
                                        <td>f</td>
                                        <td>printf("%'*14f",17.45)</td>
                                        <td><?php printf("%'*14f",17.45) ?></td>
                                    </tr>
                                    <tr>
                                        <td>Hexadecimal</td>
                                        <td>X</td>
                                        <td>printf("%'*14X",170)</td>
                                        <td><?php printf("%'*14X",170) ?></td>
                                    </tr>
                                    <tr>
                                        <td>ASCII</td>
                                        <td>c</td>
                                        <td>printf("%c",97)</td>
                                        <td><?php printf("%c",97) ?></td>
                                    </tr>
                                    <tr>
                                        <td>Entero</td>
                                        <td>d</td>
                                        <td>printf("%d",97)</td>
                                        <td><?php printf("%d",97) ?></td>
                                    </tr>
                                    <tr>
                                        <td>Varios</td>
                                        <td>Euros</td>
                                        <td>printf("%'*15.2f Euros",1475.875)</td>
                                        <td><?php printf("%'*15.2f Euros",1475.875) ?></td>
                                    </tr>
                                    <tr>
                                        <td>Varios</td>
                                        <td>Euros=Pesetas</td>
                                        <td>printf("%'*15.2f Euros=%'*18.0f Pesetas",1475.875,1475.875*166.386)</td>
                                        <td><?php printf("%'*15.2f Euros=%'*18.0f Pesetas",1475.875,1475.875*166.386) ?></td>
                                    </tr>
                                    <tr>
                                </table>
	
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