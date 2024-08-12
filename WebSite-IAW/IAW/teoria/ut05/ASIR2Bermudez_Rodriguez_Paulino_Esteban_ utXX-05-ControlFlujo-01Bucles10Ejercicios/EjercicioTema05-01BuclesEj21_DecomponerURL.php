<!DOCTYPE HTML>
<!--
	Phantom @ajlkn
-->
<html>
	<head>
		<title>Ejercicio05-21</title>
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
                    <h1> Ejercicio Tema05-01 Bucles Ej21 Decomponer URL</h1>
                </header>

                    <p>
                    Descomponer URL y obtener en un aaray asociativo los parametros con sus valores.
                    <blockquote>
                        <cite>
                            <i>La URL que se dividirá en parámetros es:</i><br>
                        https://user:password@www.LAURL.es:80/micontenedor/mirecurso.ext#ancla?parametros
                        </cite>
                    </blockquote>
                    <hr>
                    </p>
                    
                    <!-- --------------Ejercicio Tema05-01 Bucles21-------------------- -->
                    <article class="style1">
                        <?php
                        $proto="https";
                        $user="user:password";
                        $dir="www.LAURL.es";
                        $puerto="80";
                        $conte="micontenedor";
                        $recurso="mirecurso";
                        $ext="ext";
                        $ancla="#ancla";
                        $para="parametros";
                        $n=0;
                        for($n=1;$n<=100;$n++)
                        {
                            $n;
                        }
                        
                            // Array asociativo.
                            $url=array(
                                        "<b>[1] protocolo</b>"=>"$proto ",
                                        "<b>[2] user</b>"=>"$user ",
                                        "<b>[3] direccion</b>"=>"$dir ",
                                        "<b>[4] puerto</b>"=>"$puerto ",
                                        "<b>[5] contenido</b>"=>"$conte ",
                                        "<b>[6] recurso</b>"=>"$recurso ",
                                        "<b>[7] extension</b>"=>"$ext ",
                                        "<b>[8] ancla</b>"=>"$ancla ",
                                        "<b>[9] parámetros</b>"=>"$para "
                                    );
                            foreach($url as $llave=>$elementos)
                            {
                                echo $llave."=".$elementos;
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

