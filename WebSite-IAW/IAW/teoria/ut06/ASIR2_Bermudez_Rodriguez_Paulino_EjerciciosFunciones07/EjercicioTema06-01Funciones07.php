<!DOCTYPE HTML>
<!--
	Phantom @ajlkn
-->
<html>
	<head>
		<title>Ejercicio01-05</title>
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
                    <h1> Ejercicio01-05</h1>
                </header>

                    <p>
                        - Escribir un Script que contenga un formulario que pida tu nombre, apellidos,
                        edad, sexo, dirección postal, ciudad y telefono y lo visualice llamandose a si mismo.<br>
                        - En caso de no pasar algún parámetro lo rellenará con la secuencia de caracteres : "-----".<br>
                        - La información proporcionada se mostrará en una tabla centrada "HTML" bajo el formulario que 
                        muestre en la primera columna una leyenda y en la segunda los datos correspondientes.<br>
                        - El color de fondo de cada celda será aleatorio general.<br>
                        - El color del texto de las leyendas de la primera columna será negro.<br>
                        - El color de texto de los datos de la segunda columna será aleatorio en escala de gris 
                        entre el blanco y el negro.<br>
                    <br>
                    <hr>
                    </p>
                    <form action="">
                        <label for="">Formulario de datos personales.</label>
                        <input type="text" name="nom" placeholder="Nombre">
                        <input type="text" name="ape" placeholder="Apellidos">
                        <input type="text" name="edad" placeholder="Edad">
                        <input type="text" name="sexo" placeholder="Sexo">
                        <input type="text" name="dir" placeholder="Dirección">
                        <input type="text" name="city" placeholder="Ciudad">
                        <input type="text" name="tel" placeholder="Teléfono">
                        <input type="submit" value="Ver tabla">
                     </form>
                    
                    <!-- --------------Ejercicio nº 7  del manual-------------------- -->
                    <article class="style2">
                        
                        <?php
                            include('./coloresAleatorios.php');
                            $nom=isset($_REQUEST['nom']) ? $_REQUEST['nom']: "----";
                            $nom=empty($nom)?"----":$nom ;
                            $ape=isset($_REQUEST['ape']) ? $_REQUEST['ape']: "----";
                            $ape=empty($ape)?"----":$ape ;
                            $edad=isset($_REQUEST['edad'] )? $_REQUEST['edad']: "----";
                            $edad=empty($edad)?"----":$edad ;
                            $sexo=isset($_REQUEST['sexo'] )? $_REQUEST['sexo']: "----";
                            $sexo=empty($sexo)?"----":$sexo ;
                            $dir=isset($_REQUEST['dir']) ? $_REQUEST['dir']: "----";
                            $dir=empty($dir)?"----":$dir ;
                            $city=isset($_REQUEST['city'] )? $_REQUEST['city']: "----";
                            $city=empty($city)?"----":$city ;
                            $tel=isset($_REQUEST['tel']) ? $_REQUEST['tel']: "----";
                            $tel=empty($tel)?"----":$tel ;
                        ?>

                        <table>
                            <tr>
                                <?php 
                                   echo "<td style='background-color:#".color().";'>Nombre</td>";
                                   echo "<td style='background-color:#".color()."; color:#".grises()."'>".$nom."</td>";
                               ?>
                           </tr>
                           <tr>
                               <?php
                                   echo "<td style='background-color:#".color().";'>Apellido</td>";
                                   echo "<td style='background-color:#".color()."; color:#".grises()."'>".$ape."</td>";
                               ?>
                           </tr>
                           <tr>
                               <?php
                                   echo "<td style='background-color:#".color().";'>Edad</td>";
                                   echo "<td style='background-color:#".color()."; color:#".grises()."'>".$edad."</td>";
                               ?>
                           </tr>
                           <tr>
                               <?php
                                   echo "<td style='background-color:#".color().";'>Sexo</td>";
                                   echo "<td style='background-color:#".color()."; color:#".grises()."'>".$sexo."</td>";
                               ?>
                           </tr>
                           <tr>
                               <?php
                                   echo "<td style='background-color:#".color().";'>Direccion</td>";
                                   echo "<td style='background-color:#".color()."; color:#".grises()."'>".$dir."</td>";
                               ?>
                           </tr>
                           <tr>
                               <?php
                                   echo "<td style='background-color:#".color().";'>Ciudad</td>";
                                   echo "<td style='background-color:#".color()."; color:#".grises()."'>".$city."</td>";
                               ?>
                           </tr>
                           <tr>
                               <?php
                                   echo "<td style='background-color:#".color().";'>Telefono</td>";
                                   echo "<td style='background-color:#".color()."; color:#".grises()."'>".$tel."</td>";
                               ?>
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


