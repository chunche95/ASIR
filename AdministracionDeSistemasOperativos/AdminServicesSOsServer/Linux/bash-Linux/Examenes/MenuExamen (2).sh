#!/bin/bash

# echo "1) Muestra distribución, versión del kernel y si existen extensiones de virtualización de la cpu"
# echo "2) Muestra cada segundo y tres veces los 5 procesos con más threads (nombre,pid,prioridad,núnero de threads) ordenados descendesntes por threads"
# echo "3) Lanza con máxima prioridad tantos  programas de stress com vcpus tenga el sistema"
# echo "4) Informar de si el sistema esta utilizando espacio de swap o no"
# echo "5) Mostrar todo elarbol de procesos del usuario que se solicita"
# echo "6) Pasar todos los viernes a las 18:30 a nivel demantenimiento/rescate y los lunes a las 8:30 a runlevel gráfico"
# echo "7) Convertir todos los ficheros -jpg de una carpeta que se pide al usuario a .png infrmando de lo ocurrido (error codes)"
# echo "8) Saca un listado de los puertos tcp abiertos y que roceso los tiene"
# echo "9) Realiza un hash de todos los ficheros contenidos en los subdirectorios de /etc dadndo a alegir al usuario el agoritmo"



function linuxykernel() {
clear
echo =======================================
echo Versión de linux $(cat /etc/issue )
echo =======================================
echo Version de kernel $(uname -r)
echo =======================================
echo
echo Pulse enter para continuar
read nada
clear
}

function procesos() {
i=0
while [ $i -ne 3 ]
	do
		
		echo ==========================================
		ps -eLo cmd,pid,nice,nlwp --sort=-nlwp | head -6
		echo ==========================================
		i=$(($i+1))
		echo $i
		sleep 1
	done
echo Pulsar Enter para continuar
read nada
}

function prioridad(){
echo hola
}

function swap(){
clear	
	var1=`free | grep Swap: | awk '{print $2}'`
	var2=`free | grep Swap: | awk '{print $3}'`
	echo ===========================================================
	echo El espacio de Swap total es $var1 y el usado es $var2
	echo ===========================================================
	echo "Pulse Enter para continuar..."
	read nada;
}

function estadoservicios(){
	systemctl list-unit-files --type service --all
	echo "Pulse Enter para continuar..."
	read nada;
}

function actualizacion(){
while true; do
echo "Elija el numero de servidor"
echo "1- hora.roa.es"
echo "2- hora.rediris.es"
echo "3- es.pool.ntp.org"
    read -p "Elija un servidor " resp
    case $resp in
        1) ntpdate -u hora.roa.es;break;;
        2) ntpdate -u hora.rediris.es;break;;
	3) ntpdate -u es.pool.ntp.org;break;;
        * ) echo "Por favor, elija una opción correcta";;
    esac
done
	echo "Pulse Enter para continuar..."
	read nada;
}


function consumo(){
	ps -U alumno -L -o uid,pid,cmd,pcpu,lwp --sort -pcpu | head -6
	echo "Pulse Enter para continuar..."
	read nada;
}

while true
do
clear
echo "============================================================================================="
echo "1) Muestra distribución, versión del kernel y si existen extensiones de virtualización de la cpu"
echo "2) Muestra cada segundo y tres veces los 5 procesos con más threads (nombre,pid,prioridad,núnero de threads) ordenados descendesntes por threads"
echo "3) Lanza con máxima prioridad tantos  programas de stress com vcpus tenga el sistema"
echo "4) Informar de si el sistema esta utilizando espacio de swap o no"
echo "5) Mostrar todo elarbol de procesos del usuario que se solicita"
echo "6) Pasar todos los viernes a las 18:30 a nivel demantenimiento/rescate y los lunes a las 8:30 a runlevel gráfico"
echo "7) Convertir todos los ficheros -jpg de una carpeta que se pide al usuario a .png infrmando de lo ocurrido (error codes)"
echo "8) Saca un listado de los puertos tcp abiertos y que roceso los tiene"
echo "9) Realiza un hash de todos los ficheros contenidos en los subdirectorios de /etc dadndo a alegir al usuario el agoritmo"
echo "8) Salir"
echo "============================================================================================="
echo "Introduce una opción:"
read opcion
case $opcion in
1) linuxykernel;;
2) procesos;;
3) ;;
4) swap;;
5) estadoservicios;;
6) actualizacion;;
7) consumo;;
8) echo "Finalizando programa";clear; break;;
*) echo "Opción no válida, elige una opción entre 1 y 8";
        echo "Pulse una Enter para continuar"; read nada;;
esac
done
