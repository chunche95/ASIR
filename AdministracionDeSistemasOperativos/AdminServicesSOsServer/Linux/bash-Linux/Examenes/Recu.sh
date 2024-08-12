#!/bin/bash

#   echo "1) Mostrar nombre y versión de la distribución Linux y del kernel"
# 	echo "2) Muestra cada 2 segundos cuántos ficheros tiene abiertos el sistema"
# 	echo "3) Subir al máximo la prioridad del proceso sshd"
# 	echo "4) Haz que se permita el acceso de root de lunes a viernes de 8 a 18 el resto del tiempo no."
# 	echo "5) Muestra el estado de todos los servicios del sistema"
# 	echo "6) Actualizar la hora del sistema con el servidor que se solicita al usuario"
# 	echo "7) Mostrar los 5 procesos que más cpu consumen del usuario alumno incluyendo threads"


primero()
{
    echo ""
    echo ""
    uname -a
}

segundo()
{
    echo ""
    echo ""
    echo "Tengo abiertos:"
    while true
    do
        lsof | awk '{print $1}' | sort | uniq -c |sort -nr | wc -l
        sleep 2
    done
}

tercero()
{
    echo ""
    echo ""
    PID=`ps -elf | grep /usr/sbin/sshd | head -1 | awk '{print $4}'`
    renice -5 $PID
}

cuarto()
{
    echo ""
    echo ""
    echo "4"
}

quinto()
{
    echo ""
    echo ""
    echo "Comprobando servicios:"
    service --status-all
    #systemctl list-unit-files --type service --all
}

sexto()
{
    echo ""
    echo ""
    echo "6"
}

septimo()
{
    echo ""
    echo ""
    ps -U alumno -L -o uid,pid,cmd,pcpu,lwp --sort=-pcpu | head -6
}

while true
do
	clear
	echo "MENU INFO WEB"
	echo "=============================="
	echo "1) Mostrar nombre y versión de la distribución Linux y del kernel"
	echo "2) Muestra cada 2 segundos cuántos ficheros tiene abiertos el sistema"
	echo "3) Subir al máximo la prioridad del proceso sshd"
	echo "4) Haz que se permita el acceso de root de lunes a viernes de 8 a 18 el resto del tiempo no."
	echo "5) Muestra el estado de todos los servicios del sistema"
	echo "6) Actualizar la hora del sistema con el servidor que se solicita al usuario"
	echo "7) Mostrar los 5 procesos que más cpu consumen del usuario alumno incluyendo threads"
	echo "8) Salir"
	echo ""
	echo ""

	read -n1 -p "Introduce tu opción " resp

	case $resp in
        1) primero;;
        2) segundo;;
        3) tercero;;
        4) cuarto;;
        5) quinto;;
        6) sexto;;
        7) septimo;;
        8) echo ""; echo ""; echo "FIN"; break;;
        *) echo "Opción incorrecta"; sleep 2;;
	esac
    echo ""
    echo "Pulsa una tecla para continuar"
    read -n1 nada
    echo ""
    echo ""
done