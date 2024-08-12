<!DOCTYPE HTML>
<!--
	Phantom @ajlkn
-->
<html>
	<head>
		<title>Ejercicio02-03</title>
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
                    <h1> Ejercicio02-03</h1>
                </header>

                    <p>
                        Hacer un Script PHP que reciba un parámetro llamado 'numero' con un valor numérico y muestre
                        con una tabla HTML la tabla de multiplicar del 1 al 10 de ese número.
                    <br>
                    <hr>
                    </p>
                    <!-- --------------Ejercicio nº 3  del manual-------------------- -->
                    <article class="style2">
                        <form action="">
                            <label for="numero"></label>
                            <input type="text" name="numero" placeholder="Ingrese un número"><br>
                            <input type="submit" value="Mostrar tabla">
                        </form>
                        <?php  
                            
                            /* Creación de la tabla de multiplicar del parámetro 'numero' con PHP.*/
                            $num=$_GET["numero"]    // Lectura del parámetro //
                            
                        ?>

                    <table>
                        <tr>
                            <td>1</td>
                            <td>X</td>
                            <td><?php echo $num?></td>
                            <td>=</td>
                            <td><?php echo $num*1?></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>X</td>
                            <td><?php echo $num?></td>
                            <td>=</td>
                            <td><?php echo $num*2?></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>X</td>
                            <td><?php echo $num?></td>
                            <td>=</td>
                            <td><?php echo $num*3?></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>X</td>
                            <td><?php echo $num?></td>
                            <td>=</td>
                            <td><?php echo $num*4?></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>X</td>
                            <td><?php echo $num?></td>
                            <td>=</td>
                            <td><?php echo $num*5?></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>X</td>
                            <td><?php echo $num?></td>
                            <td>=</td>
                            <td><?php echo $num*6?></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>X</td>
                            <td><?php echo $num?></td>
                            <td>=</td>
                            <td><?php echo $num*7?></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>X</td>
                            <td><?php echo $num?></td>
                            <td>=</td>
                            <td><?php echo $num*8?></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>X</td>
                            <td><?php echo $num?></td>
                            <td>=</td>
                            <td><?php echo $num*9?></td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>X</td>
                            <td><?php echo $num?></td>
                            <td>=</td>
                            <td><?php echo $num*10?></td>
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


