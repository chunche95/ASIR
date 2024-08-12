<?php
/*require ("accesos.php");*/
    /* Control de acceso */
    $usuario=$_REQUEST["usuario"]; /* -> Usuario ingresado por teclado */
    $contra=$_REQUEST["contrasena"]; // Introducida en el formulario
    /* Usuario aceptado, con sus credenciales */
    $usuario_aceptado = array(
        'alumno' => 'alumno',
        'admin' => 'admin',
        'sanchez' => '7369',
        'arroyo' => '7499',
        'sala' => '7521',
        'jimenez' => '7566',
        'martin' => '7654',
        'negro' => '7698',
        'cerezo' => '7782',
        'gil' => '7788',
        'rey' => '7839',
        'tovar' => '7844',
        'alonso' => '7876',
        'jimeno' => '7900',
        'fernandez' => '7902',
        'muniz' => '7934' 
    );
    /* Inicio de sesión */

    /* Almacenamiento de la calve y valor en una variable */
    foreach ($usuario_aceptado as $persona => $pass){
        /* Comprobación de usuarios aceptados con el introducido */
        if($usuario == $persona && $contra == $pass){
            
            /* Datos válidos, definicion de sesión y almacenamiento de los datos */
            session_start();
            echo "<p>Usuario aceptado...</p>";
            $_SESSION["autenticado"]="SI";
            $_SESSION["usuario"]=$_REQUEST["usuario"];
        
            if($usuario == 'alumno' and $pass == 'alumno'  ){
                header ("Location: 5_admin.php");
                break;
            }else if ( $usuario == 'admin' and $pass == 'admin'){
                header ("Location: 5_admin.php");
                break;
            }else{
                header ("Location: 2_empleados.php");
                break;
            }
        }else{
            /* En caso de no existir la página, reenvio a la pagina de login */
            $_SESSION["autenticado"]='NO';
            header("Location: login.php?errorusuario=si");
        }
    }
?>