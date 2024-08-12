<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cierre de conexion con la base de datos</title>
</head>
<body>
    <?php
        mysql_close($conexion);
    ?>
</body>
</html>