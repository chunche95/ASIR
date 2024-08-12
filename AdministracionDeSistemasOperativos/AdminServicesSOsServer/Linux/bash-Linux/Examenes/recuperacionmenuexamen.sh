#!/bin/bash
function nombreversion() {
    cat /etc/*-release
	echo ""
    uname -mrs
	echo "Pulse Enter para continuar..."
	read nada;
}

function procesosabi() {
    uptime
	echo "Pulse Enter para continuar..."
	read nada;	sleep 3
}

function prioridad(){
    renice -n -19 sshd
	echo "El proceso SSHD ha sido cambiado"
	echo "Pulse Enter para continuar..."
	read nada;
}

function permisoroot(){
    sed -i 's/#PermitRootLogin prohibit-password/PermitRootLogin yes/g' "/etc/ssh/sshd_config"
	#sed -i 's/PermitRootLogin yes/#PermitRootLogin prohibit-password/g' "/etc/ssh/sshd_config"
	echo "Se ha cambiado la configuracion del servicio ssh"
	echo "Pulse Enter para continuar..."
	read nada;
}

function estadoservicios(){
	systemctl list-unit-files --type service --all
	echo "Pulse Enter para continuar..."
	read nada;
}

function actualizacion(){
	trap '/usr/sbin/ntpdate -u hora.roa.es' SIGHUP
	echo "Pulse Enter para continuar..."
	read nada;
}

function consumo(){
	ps aux --width 30 --sort -rss | head -n 5
	echo "Pulse Enter para continuar..."
	read nada;
}

while true
do
clear
echo "=========================================================================================="
echo "1) Mostrar nombre y version de la distribucion Linux y kernel"
echo "2) Muestra cada 2 segundos cuantos ficheros tiene abiertos el sistema"
echo "3) Subir al maximo la prioridad del proceso sshd"
echo "4) Haz que se permita el acceso de root de lunes a viernes de 8 a 18 (utiliza /etc/ssh/sshd_config)"
echo "5) Muestra el estado de todos los servicios del sistema"
echo "6) Actualiza la hora del sistema con el servidor que se solicita al usuario (lanzar el proceso con prioridad baja)"
echo "7) Mostrar los 5 procesos que mas cpu consumen del usuario alumno incluyendo threads"
echo "8) Salir"
echo "=========================================================================================="
echo "introduce una opcion:"
read opcion
case $opcion in
    1)nombreversion;;
	2)procesosabi;;
	3)prioridad;;
	4)permisoroot;;
	5)estadoservicios;;
	6)actualizacion;;
	7)consumo;;
	8)echo "Finalizando programa"; break;;
	*)echo "Opcion no valida, elige una opcion entre 1 y 8";
esac
echo "Pulse Enter para continuar";
done