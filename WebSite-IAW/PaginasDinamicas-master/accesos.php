<?php
    $user = $_POST["usuario"];
    $pass = $_POST["contrasena"];

    $user = stripcslashes($user);
    $pass = stripcslashes($pass);
    $user = mysql_real_escape_string($user);
    $pass = mysql_real_escape_string($pass);

    $conexion= mysql_connect("localhost", "alumno", "alumno", "test");
    mysql_select_db("test");
    $consulta= "select * from emp where apellido = '$user' and nro = '$pass'";
    $result = mysql_query($conexion,$consulta) or die("Fail to query database".mysql_error());
    $row = mysql_fetch_array($result);
    $filas = mysqli_num_rows($result);

    if ($filas > 0 ){
        header("Location:2_empleados.php");
    }
    else if{
        echo "Error de en la autenticación del usuario, por favor, revise sus credenciales y vuelva a intentarlo";
    }
    else if ($row["apellido"] == $user && $row["nro"] == $pass ){
        echo "<br>Login Sucess!!! Welcome ".$row['apellido'];
    }else{
        echo "<br>Failed to login!";
    }
    
    
    mysqli_free_result($result);
    mysqli_close($conexion);
?>