<?php include ("seguridad.php"); ?> <?php //aplicacionsegura01.php ?>
<html>
<head>
	<title>Aplicaci&oacute;n segura</title>
</head>

<body>
<div style="border:#999999";">Usuario : <a href="#"> <?php echo $_SESSION["miusuario"]; echo "  (Id de Sessi&oacute;n : ". session_id().")"?> </a></div>
<div align="center">
<h1>Si est&aacute;s aqu&iacute; es que te has autentificado</h1>


<div align="center"  style=" font-size:x-large; border:inset, #FF0000; background:#FFCCFF; margin:2%; padding:10%; text-decoration:blink" >
  Aplicaci&oacute;n segura
</div>

<p align="center"><a href="aplicacionsegura02.php">Ir a otra aplicacion segura</a></p>
<p align="center"><a href="salir.php">Salir</a></p>

</div>
</body>
</html>
