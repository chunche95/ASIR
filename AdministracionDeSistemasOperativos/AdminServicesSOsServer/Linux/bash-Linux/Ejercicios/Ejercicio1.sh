#!/bin/bash
#Hacer un script de bash que relacione y muestre 5 veces cada 2 segundos la
#carga (últimos 1, 5 y 15 minutos) y el nº de procesos del sistema. El
#script debe finalizar informando si el número de procesos supera los
#400.
#Ej. salida:

#Carga del sistema: 0.11, 0.13, 0.17 Numero procesos: 356
#Carga del sistema: 0.20, 0.14, 0.11 Numero procesos: 400
#Carga del sistema: 0.23, 0.20, 0.19 Numero procesos: 421
#Carga del sistema: 1.10, 0.25, 0.20 Numero procesos: 435
#Carga del sistema: 2.01, 1.13, 0.87 Numero procesos: 440
#====================================================
#ATENCION!!!! Numero de procesos mayor de 400
contador=0
while [ $contador -lt 5 ]
do
clear
echo "Carga de procesos en los últimos 1, 5 y 15 minutos"
uptime | awk '{print $(NF - 2), $(NF - 1), $NF}'

procesos = $(ps -elf | wc -l)
echo $procesos

if [ $procesos < 400 ]; then
    echo "El numero de procesos es el correcto: " $procesos
else
    echo "Error! Número de procesos mayor a 400! "
fi
$contador++
sleep 2
done
