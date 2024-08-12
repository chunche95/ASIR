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
        Introduzca un telefono de EU:    
        <input type="text" value="0034" id="$telefono">
        <input type="button" value="Evaluar" onclick="$verificar_telefono_eu()">
    </form>
    
    <?php 
        function verificar_telefono_eu($telefono)
        {
          $regex = ("'/^(?:1(?:[. -])?)?(?:\((?=\d{3}\)))?([2-9]\d{2})'.'(?:(?$0', $text");
        }
        
    ?>

</body>
</html>