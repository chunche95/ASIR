<?php 
    $mensaje1=null;
    if (isset($_REQUEST["enviar"]))
    {
        $cadena=$_REQUEST["cadena"];
        if ($cadena == "")
        {   
            $mensaje1= "El campo es obligatorio";
        }
        else if(preg_match("/\d/",$cadena))
        {
            $mensaje1 = "Formato no válido";
        }
        else
        {
            if (strlen($cadena)>12) 
            {
               $mensaje1 = "No puede ser mayor una cadena de 12 caracteres"; 
            }
            else if (strlen($cadena)<4)
            {
                $mensaje1= "No puede ser inferior una cadena a 4 caracteres";
            }
            else {
            $mensaje1 = "OK!";
           }
         }
    }
    $mensaje2=null;
    if (isset($_REQUEST["enviar"]))
    {
        $cadenamin=$_REQUEST["cadenamin"];
        if ($mensaje2 == "")
        {   
            $mensaje2 = "El campo es obligatorio";
        }
        else if(preg_match("/^hola+[a-z0-9]+/",$mensaje2))
        {
            $mensaje2 = "Formato no cumple los requisitos";
        }
        else
        {
            $mensaje2 = "OK!";
        }
    }
    $mensaje3=null;
    if (isset($_REQUEST["enviar"]))
    {
        $edad=$_REQUEST["edad"];
        if ($edad == "")
        {   
            $mensaje3 = "El campo es necesario";
        }
        else if(preg_match("/\D+/",$edad))
        {
            $mensaje3 = "Formato inválido";
        }
        else
        {
            if (strlen($edad>99)) 
            {
            $mensaje3 = "Edad inválida";
            }
            else if (strlen($edad<=0))
            {
                $mensaje3= "Edad inválida";
            }
            else {
            $mensaje3 = "Edad valida";
        }
        }
    }
    $mensaje4=null;
    if (isset($_REQUEST["enviar"]))
    {
        $movil=$_REQUEST["movil"];
        if ($movil == "")
        {   
            $mensaje4 = "El campo es obligatorio";
        }
        else if(preg_match("/^[6][0-9]{8}/",$movil))
        {
            $mensaje4 = "Cumple los requisitos";
        }
        else if(strlen($movil)!=9)
        {
          $mensaje4 = "Formato inválido";
        }
        else
        {
            $mensaje4 = "Formato inválido";
        }
    }
    $mensaje5=null;
    if (isset($_REQUEST["enviar"]))
        {
        $asir=$_REQUEST["asir"];
        if($asir == ""){
            $mensaje5=" El campo es obligatorio";
        }
        else if(preg_match("/iaw|aso|asgbd|it|eie|siad|sri/i", $asir))
        {
            $mensaje5= "Cadena correcta es una asignatura del FP ASIR";
        } else {
            $mensaje5= "Introduce una asignatura del FP ASIR";
        }
       
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="page1.css">
    <title>Página 1</title>
</head>
<body>
        <h1> 
                Estos son mis ejemplos de expresiones regulares:
        </h1>
    <div class="notepad">
                  Mis Notas
        <div class="header">
                
            <div class="paper">
                Tienes un botón que te comprueba cada ejemplo de 'Mis Notas'. &#128521;

      
            <h1>Formulario con expresiones regulares HTML</h1>
        <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <br><br>

            <p>
                &#128077; Primero <br>
                Cadena de caracteres entre 4 y 12 carácteres, mayúsculas y minúsculas aceptadas: 
                <input type="text" name="cadena"  ><span class="notepad"><?php echo $mensaje1 ?></span> <br>
               
                &#128077; Segundo  <br>
                Cadena sólo en minúsculas que empiece por 'hola' : 
                <input type="text" name="cadenamin" ><span class="notepad"><?php echo $mensaje2 ?></span> <br> 
                
                &#128077; Tercer  <br>
                Escriba su edad : (max 99 años) 
                <input type="text" name="edad"  ><span class="notepad"><?php echo $mensaje3 ?></span><br> 
               
                &#128077; Cuarto  <br>
                Introduzca su teléfono móvil: 
                <input type="text" name="movil" ><span class="notepad"><?php echo $mensaje4 ?></span><br> 
                
                &#128077; Quinto  <br>
                Introduzca una asignatura de ASIR: 
                <input type="text" name="asir" ><span class="notepad"><?php echo $mensaje5 ?></span><br> 
               
            </p>
           <center>
                <p> 
                    <input type="submit" name="enviar" value="Enviar la información">
                </p>
            </center>

           </div>
        </div>
    </div>

</body>
</html>