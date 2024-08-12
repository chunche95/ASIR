<?php //control.php
$usr=$_POST["usuario"];		//Usuario pasado a la pagina.
$pwd=$_POST["contrasena"];	//Password pasado a la pagina.

//----Obtenemos Usuario y Contrase�a para su verificacion por algun metodo :
//----Directo, de la BBDD u otras alternativas

		$Usuario = "pepe";
		$Contras = "perez";

//---Fin de obtencion de Usuario

//vemos si el usuario y contrase�a es v�ildo
if ( $usr == $Usuario && $pwd == $Contras ){
	//usuario y contrase�a v�lidos
	//defino una sesion y guardo datos
	session_start();
	$_SESSION["autentificado"]= "SI";
	$_SESSION["miusuario"] = $_POST["usuario"];
	header ("Location: aplicacionsegura01.php");
}else {
	//si no existe le mando otra vez a la portada
	header("Location: index.php?errorusuario=si");
}
?>
