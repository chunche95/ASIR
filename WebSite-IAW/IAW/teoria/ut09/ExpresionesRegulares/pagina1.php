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
        <input type="text" value="cadena con iaw en la frase">
        <input type="submit" value="Evaluar" onclick="$verificar_cadena()">
    </form>
    <?php 
        function verificar_cadena($cadena) 
        {   
           if (ereg("iaw", $cadena))     
             echo "$cadena NO contiene 'iaw'.";   
           else     
             echo "Sí! $cadena tiene a 'iaw'."; 
        } 
        
    ?>

</body>
</html>