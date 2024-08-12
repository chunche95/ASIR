<!DOCTYPE HTML>
<!--
	Phantom @ajlkn
-->
<html>
	<head>
		<title>Ejercicio01-03</title>
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
                    <h1> Ejercicio01-03</h1>
                </header>

                    <p>
                        Hacer un Script que utilice una función que reciba dos parámetros y devuelva
                        el cociente del mayor entre el menor.
                    <br>
                    <hr>
                    </p>

                    <form action="">
                            <input type="text" name="num1" placeholder="Ingrese el número uno"><br>
                            <input type="text" name="num2" placeholder="Ingrese el número dos"><br>
                            <input type="submit" value="Mostrar resultado">
                    </form>
                    <!-- --------------Ejercicio nº 3  del manual-------------------- -->
                    <article class="style2">
                        
                        <?php  

                            /* Declaro las variables con  un valor por defecto para el inicio del programa*/
                            $num1=isset($_GET["num1"]) ? $_GET["num1"]:20;
                            $num2=isset($_GET["num2"]) ? $_GET["num2"]:10;
                        /* Creo la funcion */
                           function division($num1,$num2)
                           {
                               /* Tarea que hace la funcion */
                                if($num1<$num2){            /* Condicional de superioridad n1<n2 */
                                    $divide=$num2/$num1;
                                    return "de la división es:".$divide."<br>";
                                    return "Dividendo:<br>";
                                   
                                    
                                }else{                      /* En caso contratio n1>n2*/
                                    $divide=$num1/$num2;
                                    return "de la división es: ".$divide."<br>";
                                    
                                }
                           }
                            /* Resultado de la funcion */
                            echo "Resultado ";
                            echo division($num1,$num2);
                            /* Condición que hace la misma tarea que la primera, ver que numero es mayor al otro */
                           if($num1<$num2){
                                echo "Dividendo: ".$num2."<br>";
                                echo "Divisor: ".$num1."<br>";
                           
                            }else{
                                echo "Dividendo: ".$num1."<br>";
                                echo "Divisor: ".$num2."<br>";
                             
                            }
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


