<?php //index.php ?>
<html>
<head>
	<title>Autentificaci&oacute;n PHP</title>
    <style type="text/css">
<!--
.Estilo1 {
	color: #0000FF;
	font-weight: bold;
}
-->
    </style>
</head>
<body>
<h1 align="center">Autentificaci&oacute;n PHP</h1>

<form action="control.php" method="POST">
<table align="center" width="225" cellspacing="2" cellpadding="2" border="0">
<tr>
    <td colspan="2" align="center"
	<?php $error = isset($_GET["errorusuario"]) ? $_GET["errorusuario"] : "si"; ?>
	<?php if ( $error == "si" ){ ?>
		bgcolor=red><span style="color:ffffff"><b>Datos incorrectos</b></span>
	<?php }else{ ?>
		bgcolor=#cccccc &lt; Introduce tu clave de acceso
	<?php } ?></td>
</tr>
<tr>
    <td align="right">USER:</td>
    <td><input type="Text" name="usuario" size="8" maxlength="50"></td>
</tr>
<tr>
    <td align="right">PASSWD:</td>
    <td><input type="password" name="contrasena" size="8" maxlength="50"></td>
</tr>
<tr>
    <td colspan="2" align="center"><input type="Submit" value="ENTRAR"></td>
</tr>
</table>
</form>

<p align="center">Volver al <a href="../indiceEjemplos.html">menu principal</a> de ejemplos </p>
<p align="center">Ver la <a href="index.html">explicacion</a>. de estas paginas </p>
<div align="center">
  Datos correctos de acceso : <br>
  <br>
  Usuario: <span class="Estilo1">pepe</span><br>
  Passwd:  <span class="Estilo1">perez</span>
</div>
</body>
</html>
