<!DOCTYPE HTML>
<!--
	Phantom @ajlkn
-->
<html>
	<head>
		<title>Ejercicio05-09</title>
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
                    <h1> EjercicioTema05-01 Bucles09</h1>
                </header>

                    <p>
                    Declarar un array donde metas los datos tuyos y de tres compañeros más.
                    Datos a guardar : Ap1, Ap2, Nombre, Edad, Tlf, email y Direccion
                    El array se indexa de la siguiente manera : <br>
                    <i>"Ap1 Ap2-Nombre". Ejemplo : "Perez Lopez-Manuel"</i><br>
                    Mostrar mediante un doble bucle anidado for-each todos estos datos dentro de una tabla HTML
                    <hr>
                    </p>
                    
                    <!-- --------------Ejercicio Tema05-01 Bucles09-------------------- -->
                    <article class="style1">
                        <?php
                        /* ******** *
                         *  Datos   *
                         * ******** */
                                /**************************** */
                                @$ap11="Bermúdez" ;
                                @$ap21="Rodríguez";
                                @$nom11="Paulino";
                                @$edad11="18";
                                @$tel11="643225834" ;
                                @$mail11="beropa@mail.com" ;
                                @$dir11="Dir1 Nº1 Puerta 11";
                                /**************************** */
                                @$ap12="Cáceres" ;
                                @$ap22="Córdoba";
                                @$nom12="Rosa";
                                @$edad12="19";
                                @$tel12="698525851" ;
                                @$mail12="cacoro@mail.com" ;
                                @$dir12="Dir1 Nº2 Puerta 12";
                                /**************************** */
                                @$ap13="Larte" ;
                                @$ap23="Ramirez";
                                @$nom13="Tamara";
                                @$edad13="17";
                                @$tel13="700525856" ;
                                @$mail13="larata@mail.com" ;
                                @$dir13="Dir1 Nº3 Puerta 13";
                                /**************************** */
                        
                        /////////////////////
                        // Array de datos. //
                        /////////////////////
                            $alumnos1 = array("$ap11","<td>$ap21-$nom11</td>","<td>$edad11</td>",
                            "<td>$tel11</td>","<td>$mail11</td>","<td>$dir11</td>",
                            
                            "<tr><td>$ap12</td>","<td>$ap22-$nom12</td>","<td>$edad12</td>","<td>$tel12</td>",
                            "<td>$mail12</td>","<td>$dir12</td></tr>",
                            
                            "<tr><td>$ap13</td>","<td>$ap23-$nom13</td>","<td>$edad13</td>","<td>$tel13</td>",
                            "<td>$mail13</td>","<td>$dir13</td></tr>");
                        
                        /* **************************** *
                        * Creación del Array de datos.  *
                        * ***************************** */
                        print "<h2>Datos:</h2>";
                        foreach($alumnos1 as $datos)
                        {
                            
                            print $datos;
                        }
                        print "<hr>";
                        ?>
                        <h2>Tabla:</h2>
                        <table>
                            <th>Apellido1</th>
                            <th>Apellido2-Nombre</th>
                            <th>Edad</th>
                            <th>Teléfono</th>
                            <th>Mail</th>
                            <th>Dirección</th>
                            <tr>
                                <td>
                                    <?php foreach($alumnos1 as $datos){print $datos;}?>
                                </td>
                            </tr>
                            
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

