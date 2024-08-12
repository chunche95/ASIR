#!/bin/bash

	# echo "1) Muestra marca y modelo del microprocesador y tamaño de memoria RAM"
	# echo "2) Muestra espacio ocupado por todos los directorios de /"
	# echo "3) Subir ligeramente la prioridad a todos los procesos del usuario alumno"
	# echo "4) Comprobar si está instalado el servidor web nginx y si no instalarlo"
	# echo "5) Comprobar si el servidor web nginx está arrancado y respondiendo en el pto 80 y si no arrancarlo"
	# echo "6) Programar la reconfiguración del servidor nginx a 10 procesos worker en la madrugada del domingo al lunes 5/12/2016 a las 2:30"
	# echo "7) Mostrar cada 3 segundos todos los procesos del usuario que corre nginx y los 5 que más memoria real consumen del usuario alumno ordenados por uso de memoria real descendiente"
	

clear

primero()
{
	echo "Procesador:"
	hwinfo --cpu | grep Model | head -n1
	echo "Memoria RAM"
	hwinfo --mem | grep Size
}

segundo()
{
	for i in `ls /`
	do
		if [ -d /$i ];
		then
			du -sh /$i 2>/dev/null
		fi
	done
	echo ""
	echo "Total:"
	du -sh / 2>/dev/null
}

tercero()
{
	for i in `ps -ef | awk '{print $1,$2}' | grep alumno | awk '{print $2}'`
	do
		renice 0 $i &>/dev/null
	done
	echo "Prioridad cambiada"
}

cuarto()
{
	dpkg -l | grep nginx &>/dev/null
	if [ $? -ne 0 ]; then
		echo "Instalando..."
		sudo apt-get install nginx
	else
		echo "Ya está instalado"
	fi
}

quinto()
{
	netstat -tlnp | grep nginx &>/dev/null
	if [ $? -eq 0 ]; then
		echo "Nginx está activo"
	else
		echo "Nginx está desactivado"
		echo "Activando..."
		service nginx start
		echo "Activado"
	fi
}

sexto()
{
	echo "cp /etc/nginx/nginx.conf /etc/nginx/nginx.conf.bak" >> /home/misript.sh
	echo "cat /etc/nginx/nginx.conf | sed 's/worker_processes\ 4/worker_processes\ 10/' >> /etc/nginx/nginx.tmp" >> /home/misript.sh
	echo "cp /etc/nginx/nginx.tmp /etc/nginx/nginx.conf" >> /home/misript.sh
	echo "30 2 * * 1 /home/misript.sh" >> /var/spool/cron/crontabs
}

septimo()
{
	while true
	do
		clear
		echo Procesos nginx
		echo ============
		ps -U "www-data" -o uid,pid,cmd,rss --sort=-rss
		echo ""
		echo Procesos de alumno que mas memoria consumen
		echo ======================================
		ps -U alumno -o uid,pid,cmd,rss --sort=-rss | head -6
		sleep 3
	done
}

while true
do
	clear
	echo "MENU INFO WEB"
	echo "=============================="
	echo "1) Muestra marca y modelo del microprocesador y tamaño de memoria RAM"
	echo "2) Muestra espacio ocupado por todos los directorios de /"
	echo "3) Subir ligeramente la prioridad a todos los procesos del usuario alumno"
	echo "4) Comprobar si está instalado el servidor web nginx y si no instalarlo"
	echo "5) Comprobar si el servidor web nginx está arrancado y respondiendo en el pto 80 y si no arrancarlo"
	echo "6) Programar la reconfiguración del servidor nginx a 10 procesos worker en la madrugada del domingo al lunes 5/12/2016 a las 2:30"
	echo "7) Mostrar cada 3 segundos todos los procesos del usuario que corre nginx y los 5 que más memoria real consumen del usuario alumno ordenados por uso de memoria real descendiente"
	echo "8) Salir"
	echo ""
	echo ""

	read -n1 -p "Introduce tu opción " resp

	echo ""
	echo ""

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