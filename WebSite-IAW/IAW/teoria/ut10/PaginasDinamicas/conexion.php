<?php   //Script de Conexion a la Base de Datos test en localhost con alumno/alumno.
  $BaseDatos	= "test";
  $Servidor 	= "localhost";
  $Usuario  	= "alumno";
  $Contrasena 	= "alumno";

  $conexion = mysqli_connect( $Servidor , $Usuario , $Contrasena , $BaseDatos) or die('No pudo conectarse : ' . mysqli_error());
?>
