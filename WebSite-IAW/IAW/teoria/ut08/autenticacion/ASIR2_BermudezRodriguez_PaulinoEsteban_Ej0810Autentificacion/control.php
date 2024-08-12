<?php
/* Control de accesos PHP */
$usua=$_REQUEST["usuario"]; /*Usuario ingresado por teclado*/
$contrasena=$_REQUEST["contrasena"]; /* Contraseña que ingresa por teclado */
/* Usuarios aceptados con sus credenciales de acceso. */
    $usuario = array(
        'user' => 'user',
        'admin' => 'admin',
        'paulino' => 'bermudez'
    );
    /* Inicio una sesion */
    
    /* Guardamos los valores del array en una variable */
    foreach ($usuario as $persona => $pass){
        /* Comparación de usuarios aceptados con el ingresado por teclado */
        if ($usua == $persona && $contrasena == $pass ){
            /* Datos válidos */
            /* Definición de sesión y guardado de datos  */
			Session_start();
           $_SESSION["autenticado"]='SI';
           $_SESSION["usuario"]=$usua;
            header ("Location: unapaginasegura.php");
            break;
	
        }else{
            /* En caso de no existir la página, reenvio a la pagina inicial de login */
           $_SESSION["autenticado"]='NO';
            header("Location: login.php?errorusuario=si");

        }
    }
?>
