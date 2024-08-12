<?php 
/* Inicio la sesión */
session_start();
/* Comprueba el inicio de sesion esté en 'sí'*/
if ($_SESSION['autenticado'] != 'SI') {
    /* Sino se ha hecho envíar al Login */
    header("Location: login.php");
    exit();
}
?>
