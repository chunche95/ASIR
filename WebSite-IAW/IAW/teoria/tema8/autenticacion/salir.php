<?php //salir.php
session_start();
session_destroy();
?>
<html>
<head>
	<title>Has salido!!</title>
</head>

<body>

<div align="center">
  <h2>Gracias por tu acceso</h2>
  <p><a href="index.php?errorusuario=si">Volver al formulario de autentificación</a>     </p>
  <p>Volver al <a href="../indiceEjemplos.html">menu principal</a> </p>
</div>
</body>
</html>
