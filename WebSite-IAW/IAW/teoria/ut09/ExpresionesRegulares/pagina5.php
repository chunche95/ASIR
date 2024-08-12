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
        Introduzca una IP- Sólo numeros:    
        <input type="text" value="ip" name="ip" id="$ip">
        <input type="button" value="Evaluar" onclick="$verificar_ip()">
    </form>
    <?php 
        function verificar_ip($ip)
        {
            return preg_match("/^([1-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])" .
                    "(\.([0-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])){3}$/",$ip);
            echo "La IP es:". $ip;
        }
    ?>

</body>
</html>