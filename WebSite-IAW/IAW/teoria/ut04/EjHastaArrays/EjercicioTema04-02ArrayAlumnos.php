<!DOCTYPE HTML>
<!--
	Phantom @ajlkn
-->
<html>
	<head>
		<title>Ejercicio04-02</title>
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
                    <h1> EjercicioTema04 - 02 - Array Alumnos</h1>
                </header>

                    <p>
                    Crear un array asociativo bidimensional llamado datos mediante la función array(). Código
                        Examinar el Codigo
                        El primer indice será el DNI seguido de su letra y en el segundo indice almecenar :
                        <ul>
                        <li>"nombre", "edad", "direccion", "telefono" y "email".</li>
                        <li>Se crearán tres elemenos, el primero tus datos, el segundo y tercero los de tus compañeros anterior y posterior de la lista.</li>
                        <li>Visualizar su contenido de forma individual cada uno de sus elementos y con var_dump() a continuación.</li>
                        </ul>
					<hr>
					</p>
                    <!-- --------------Ejercicio nº 2  del manual-------------------- -->
                    <article class="style1">
                    <?php
                    $datos=array(
                                "0001" => array (
                                    "nombre" => "Paulino",
                                    "edad" => 65,
                                    "direccion" => "C/ Castellana nº 26.",
                                    "telefono" => 667552189,
                                    "email" => "mailto1@mailto.com",
                                ),
                                "0002" => array (
                                    "nombre" => "Daniel",
                                    "edad" => 152,
                                    "direccion" => "C/ Lopez Garcia, 12",
                                    "telefono" => 667552190,
                                    "email" => "mailto2@mailto.com",
                                ),
                                "0003" => array (
                                    "nombre" => "Angel",
                                    "edad" => 95,
                                    "direccion" => "C/ Fuencarral, 24",
                                    "telefono" => 667552191,
                                    "email" => "mailto3@mailto.com",
                                )
                                );
                        ?>
                        <table>
                            <tr>
                                <th>Nombre</th>
                                <th>Edad</th>
                                <th>Dirección</th>
                                <th>Teléfono</th>
                                <th>E-mail</th>
                            </tr>
                            <tr>
                                <td><?php echo $datos["0001"]["nombre"] ?></td>
                                <td><?php echo $datos["0001"]["edad"] ?></td>
                                <td><?php echo $datos["0001"]["direccion"] ?></td>
                                <td><?php echo $datos["0001"]["telefono"] ?></td>
                                <td><?php echo $datos["0001"]["email"] ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $datos["0002"]["nombre"] ?></td>
                                <td><?php echo $datos["0002"]["edad"] ?></td>
                                <td><?php echo $datos["0002"]["direccion"] ?></td>
                                <td><?php echo $datos["0002"]["telefono"] ?></td>
                                <td><?php echo $datos["0002"]["email"] ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $datos["0003"]["nombre"] ?></td>
                                <td><?php echo $datos["0003"]["edad"] ?></td>
                                <td><?php echo $datos["0003"]["direccion"] ?></td>
                                <td><?php echo $datos["0003"]["telefono"] ?></td>
                                <td><?php echo $datos["0003"]["email"] ?></td>
                            </tr>
                        </table>
                        <br/>
                        <?php echo var_dump($datos) ?>

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


