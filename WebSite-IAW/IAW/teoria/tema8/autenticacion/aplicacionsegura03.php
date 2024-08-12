<?php include ("seguridad.php"); ?>
<html>
<head>
	<title>Otra p&aacute;gina de Aplicaci&oacute;n segura</title>
</head>

<body>
<div style="border:#999999";">Usuario : <a href="#"> <?php echo $_SESSION["miusuario"]; echo "  (Id de Sessi&oacute;n : ". session_id().")"?> </a></div>

<h1  align="center">Si est&aacute;s aqu&iacute; es que te has autentificado</h1>
<p style="background-color:orange"; align="center">Tercera p&aacute;gina de Aplicaci&oacute;n segura</p>

<p align="center"> <a href="aplicacionsegura01.php">Volver a la p&aacute;gina segura primera</a></p>
<p align="center"><a href="aplicacionsegura02.php">Ir a la Segunda</a> </p>

<p align="center"> <a href="salir.php">Salir</a></p>

</body>
</html>
