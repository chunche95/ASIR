#!/bin/bash

# 1) Muestra marca y modelo del microprocesador y tamaño de memoria RAM
# 2) Muestra  ocupación de todos los directorios de /
# 3) Subir ligeramente la prioridad a todos los procesos del usuario alumno
# 4) Comprobar si está instalado el servidor web nginx y si no instalarlo
# 5) Comprobar si el servidor web nginx está arrancando y respondiendo
# 6) Programar la reconfiguración del servidor nginx en la madrugada del domingo al lunes
# 7) Mostrar cada 3 segundos todos los procesos del usuario que corre nginx y los 5 que más memoria real consumen del
# usuario alumno, ordenados por memoria real (rss) descendente (mostrar uid,pid,cmd y rss)"


clear

function cpuram() {
clear
# El comando cat muestra el contenido
# El comando grep selecciona la linea con eos caracteres -i da lo mismo mayusculas que minusculas
# Con el comando awk seleccionamo el campo a imprimir
echo Procesador $(cat /proc/cpuinfo |grep "model name" | awk '{print $4 $5 $6 $7 $8 $9}')
echo Memoria Total $(cat /proc/meminfo | grep -i memtotal | awk '{print $2}') KB
echo Memoria libre $(cat /proc/meminfo | grep -i memfree | awk '{print $2}') KB
echo Pulsa Enter para continuar
read nada
}

function espacioraiz() {
clear
for directorio in $(ls /)
	do
	# El comando test comprueba que exista -d comprueba que es un directorio
	# El comando du "Disk Usage" muestra el espacio ocupado
	test -d /$directorio && du -sh /$directorio 2> /dev/null
	done
echo Pulsa Enter para continuar
read nada
}

function prioridad() {
clear
# El comando renice cambia la prioridad de un proceso ya activo -n indica prioridad -5 es el numero de prioridad que le hemos dado -u induca a que usuario le cambiamos la prioridad
renice -n -5 -u alumno
echo Pulsa Enter para continuar
read nada
}

function nginxinstalado() {
clear
# El comando dpkg es para ver los paquetes instalados -l lo hace en lista
# apt-get -y es un auto yes a las preguntas de la instalacion
dpkg -l | grep nginx &> /dev/null
case $? in
	0) echo nginx está instalado;;
	*) echo nginx no está instalado, lo instalamos; apt-get -y install nginx ;;
esac
echo Pulsa Enter para continuar
read nada
}

function nginxactivo() {
clear
netstat -tlnp | grep nginx &> /dev/null
case $? in
	0) echo El servidor nginx está activo ;;
	*) echo nginx no está activo, lo arrancamos; service nginx start ;;
esac
echo Pulsa Enter para continuar
read nada
}

function procesos() {
clear
# ps muestra los procesos -U indica del usuario
while true
	do
	clear
	echo Procesos nginx
	echo ==========================================
	ps -U "www-data" -o uid,pid,cmd,rss --sort=-rss
	echo Procesos de alumno que mas memoria consumen
	echo ==========================================
	ps -U alumno -o uid,pid,cmd,rss --sort=-rss | head -6
	sleep 3
	done
echo Pulsar Enter para continuar
read nada
	
}
function workers() {
clear
echo "sed -i 's/worker_processes\ auto/worker_processes\ 10/g' /etc/nginx/nginx.conf" > /tmp/atjobs.txt
echo "service nginx restart" >> /tmp/atjobs.txt
at -t 12050230 -f /tmp/atjobs.txt
atq
echo Pulsa Enter para continuar
read nada
}

while true
do
clear
echo "============================================================================================="
echo "1) Muestra marca y modelo del microprocesador y tamaño de memoria RAM"
echo "2) Muestra  ocupación de todos los directorios de /"
echo "3) Subir ligeramente la prioridad a todos los procesos del usuario alumno"
echo "4) Comprobar si está instalado el servidor web nginx y si no instalarlo"
echo "5) Comprobar si el servidor web nginx está arrancando y respondiendo"
echo "6) Programar la reconfiguración del servidor nginx en la madrugada del domingo al lunes"
echo "7) Mostrar cada 3 segundos todos los procesos del usuario que corre nginx y los 5 que más memoria real consumen del 
usuario alumno, ordenados por memoria real (rss) descendente (mostrar uid,pid,cmd y rss)"
echo "8) Salir"
echo "============================================================================================="
echo "Introduce una opción:"
read opcion
case $opcion in
1) cpuram;;
2) espacioraiz;;
3) prioridad;;
4) nginxinstalado;;
5) nginxactivo;;
6) workers;;
7) procesos;;
8) echo "Finalizando programa"; break;;
*) echo "Opción no válida, elige una opción entre 1 y 8";
        echo "Pulse una Enter para continuar"; read nada;;
esac
done
