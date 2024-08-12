#! /bin/bash
clear

#				MENU OPERADOR
# 
#  1. Mostrar distribución, version de kernel y si existen extensiones de la cpu\e[0m"
#  2. Mostrar cada segundo y 3 veces los 5 procesos con más threads (nombre, pid, \e[0m"
#     prioridad, numero de threads) ordenado descendentemente por numero de threads.\e[0m"
#  3. Subir ligeramente la prioridad a todos los procesos del usuario alumno\e[0m"
#  4. Informar de si el sistema está utilizando espacio de swap o no\e[0m"
#  5. Mostrar todo el árbol de procesos del usuario que se solicita \e[0m"
#  6. Pasar todos los viernes a las 18:30 a nivel de mantenimento/rescate y los \e[0m"
#     lunes a las 8:30 a runlevel gráfico. \e[0m"
#  7. Convertir todos los ficheros .jpg de una carpeta que se pide al usuario a .png \e[0m"
#     informando de lo ocurrido (error codes) (utiliza convert de Imagemagik) \e[0m"
#  8. Sacar un listado de los puertos tcp abiertos y qué proceso los tiene.\e[0m"
#  9. Realizar un hash de todos los ficheros contenidos en los subdirectorios de /etc \e[0m"
#     dando a elegir al usuario el algoritmo (*)\e[0m"
# 


function menu1() {
	distrib=`lsb_release -a |grep -i description | awk '{$1=""; print $0}'`
	kernel=`uname -mrs`
	cat /proc/cpuinfo |grep -i vms 2> /dev/null
	if [ $? -eq 0 ]; then {
		ext=si
	} else {
		ext=no
	}
	fi
	echo -e "\e[1;36m Tu distribución de Linux es $distrib, el kernel es $kernel y $ext tiene extensiones de la cpu"
	read -p "Pulse una tecla para continuar..." nada
}

function menu2(){
	while true 
	do
	date | awk '{print $4}' 
	echo =================================================
	ps -Lo cmd,pid,nice,lwp |head -n1
	ps -Lo cmd,pid,nice,lwp |tail -n5
	echo =================================================
	sleep 1
	done
}

function menu3() {
	vcpus=`nproc --all`
	for v in `seq 1 $vcpus`
	do 
		read -p "Es posible que el sistema se cuelgue, pulse una tecla bajo su responsabilidad..." nada
		sha1sum /dev/zero &
	done
}
while true
do
clear

function menu4() {
	kas=`swapon -s |awk '{print $4}' |tail -n1`
	if [ $kas -eq 0 ]; then {
		echo "No se está usando espacio swap actualmente."
		read -p "Pulse una tecla para continuar..." nada
	} else {
		echo "Se están utilizando $kas Kbytes de swap actualmente"
		read -p "Pulse una tecla para continuar..." nada
	}
	fi
}

function menu5() {
	echo ""
	echo "Usuarios disponibles en el sistema"
	echo ======================================
	cat /etc/passwd |grep -i /bin/bash |cut -d":" -f1
	echo ""
	read -p "Introduzca el nombre de un usuario: " user
	pstree -U $user |more
}
function menu6() {
	cat /var/spool/cron/crontabs/root | grep -i "init 5" 2> /dev/null
	case $? in 
		0)  echo "El nivel ya se encuentra programado." 
		;;
		1)	echo "Se va a programar el nivel grafico para activarse los lunes a las 08:30"
			read -p "Pulse una tecla para proceder..." jeje
			echo "30 08 * * 1 init 5" >> /var/spool/cron/crontabs/root
		;;
	esac
	cat /var/spool/cron/crontabs/root | grep -i "init 1" 2> /dev/null
	case $? in
		0) 	echo "El nivel ya se encuentra programado."
		;;
		1)	echo "Se va a programar el nivel de mantenimiento para activarse los viernes a las 18:30"
			read -p "Pulse una tecla para proceder..." jeje
			echo "30 18 * * 5 init 1" >> /var/spool/cron/crontabs/root
		;;
	esac
}
function menu7() {
	cd /
	mkdir ./imagenes2
	read -p "Introduce una ruta: " ruta
	for file in `find $ruta -type f -name *.jpg`
	do
		ext=`echo $file |awk -F\. '{print $1}'`
		nombre=`echo $file |awk -F"/" '{print $NF}'`
		sin_ext=`echo $nombre |awk -F\. '{print $1}'`
		convert $file ./imagenes2/$sin_ext.png
		conteo=`expr $contador + 1`
	done
	echo $conteo
	read -p "Pulse una tecla para continuar..." nada
}

function menu8() { 
	netstat -lptn 
	read -p "Pulse una tecla para continuar..." nada
}
function menu9() {
	echo " 1) md5"
	echo " 2) sha1"
	echo " 3) sha256"
	echo " 4) sha512"
	echo ""
	read -p "Elige un algoritmo de encriptación: " alg
	case $alg in
		1) hash=md5sum ;;
		2) hash=sha1sum ;;
		3) hash=sha256sum ;;
		4) hash=sha512sum ;;
	esac
	for file in `find /etc`
	do
		if [ -f $file ]; then
			$hash $file 2> /dev/null
		fi

	done
	read -p "Pulsa una tecla para continuar..." nada
}
echo ""
echo -e "\e[1;36m 				MENU OPERADOR\e[0m"
echo "==============================================================================="
echo -e "\e[0;32m 1. Mostrar distribución, version de kernel y si existen extensiones de la cpu\e[0m"
echo -e "\e[0;32m 2. Mostrar cada segundo y 3 veces los 5 procesos con más threads (nombre, pid, \e[0m"
echo -e "\e[0;32m    prioridad, numero de threads) ordenado descendentemente por numero de threads.\e[0m"
echo -e "\e[0;32m 3. Subir ligeramente la prioridad a todos los procesos del usuario alumno\e[0m"
echo -e "\e[0;32m 4. Informar de si el sistema está utilizando espacio de swap o no\e[0m"
echo -e "\e[0;32m 5. Mostrar todo el árbol de procesos del usuario que se solicita \e[0m"
echo -e "\e[0;32m 6. Pasar todos los viernes a las 18:30 a nivel de mantenimento/rescate y los \e[0m"
echo -e "\e[0;32m    lunes a las 8:30 a runlevel gráfico. \e[0m"
echo -e "\e[0;32m 7. Convertir todos los ficheros .jpg de una carpeta que se pide al usuario a .png \e[0m"
echo -e "\e[0;32m    informando de lo ocurrido (error codes) (utiliza convert de Imagemagik) \e[0m"
echo -e "\e[0;32m 8. Sacar un listado de los puertos tcp abiertos y qué proceso los tiene.\e[0m"
echo -e "\e[0;32m 9. Realizar un hash de todos los ficheros contenidos en los subdirectorios de /etc \e[0m"
echo -e "\e[0;32m    dando a elegir al usuario el algoritmo (*)\e[0m"
echo -e "\e[0;32m 10. Salir\e[0m"
echo "==============================================================================="
echo ""
read -p "Escoge una opcion: " opt
case $opt in
	1) menu1
	;;
	2) menu2
	;;
	3) menu3
	;;
	4) menu4
	;;
	5) menu5
	;;
	6) menu6
	;;
	7) menu7
	;;
	8) menu8
	;;
	9) menu9
	;;
	10) exit
	;;
esac
done
