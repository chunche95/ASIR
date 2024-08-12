<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="main.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="get">
        Introduzca una cadena:    
        <input type="text" value="Mi asignatura favorita es iaw" id="$cadena">
        <input type="button" value="Evaluar" onclick="$verificar_cadena()">
    </form>
    <?php 
        function verificar_cadena ( $cadena ) 
        {   
            if ($cadena != 0) {
            $cadena = ereg_replace("$", "<br />", $cadena);
            echo $cadena;
            } else {
                echo "Valor incorrecto!";
            }
        }
        
    ?>

</body>
</html>