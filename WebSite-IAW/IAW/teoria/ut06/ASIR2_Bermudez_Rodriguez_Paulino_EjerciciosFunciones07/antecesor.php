<?php
    /* Declaración de las variables */
    @$contador=0; /* Contador del número --> numero buscado */
    function antecesor($contador) /* Funcion con el contador de numeros hasta que cumpla la condicion */
    {
       for($suma=1; $suma<125; $suma++) 
       /* Inicio el valor de la suma a 1 y espero hasta que sea menor que 125, mientras voy sumando */
        {
            $suma += $contador;
            $contador++;
            echo "El contador va por: ".$contador;      /* Nº por el que va */
            echo "-- Su suma da: ".$suma."<br>";          /* Suma de sus anteriores */
        }
        return $contador;
    }

?>