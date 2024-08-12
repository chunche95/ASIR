<?php
/* Control de accesos PHP */
$usua='user'; /*Usuario ingresado por teclado*/
$contrasena='user'; /* Contraseña que ingresa por teclado */
/* Usuarios aceptados con sus credenciales de acceso. */
    $usuario = array(
        "user" => "user",
        "admin" => "admin",
        'paulino' => 'bermudez'
    );
    /* Inicio una sesion */
    
    /* Guardamos los valores del array en una variable */
    foreach ($usuario as $persona => $pass){
		echo "La clave $persona con valor $pass";
    }
?>