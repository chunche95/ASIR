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
        Introduzca un email:    
        <input type="text" name="email" value="">
        <input type="button" value="Evaluar" name="evaluar" onclick="$email()">
    </form>
    <?php 
      if(isset($_REQUEST["evaluar"])){
        function verificar_email($email) 
        {
          if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/",$email))
          {
            return true;
            echo "Buena entrada";
          }
          return false;
          echo "Datos introducidos incorrectos, revise la entrada";
        } 
      }
    ?>

</body>
</html>