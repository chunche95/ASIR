#!/bin/bash             
clear
##########################################################
# ADMINISTRACION DE SISTEMAS INFORMATICOS EN RED.        #
#                                                        #
# Script que muestra un menu tipo utilizando funciones   #
#                                                        #
# @autor: Pauchino                                       #
# @version: 1.0                                          #
##########################################################
trap '' 2

echo "Ejercicios BASH para ver los procesos en funcionamiento. "

# Declaracion de las funciones.

function todoservicios(){
    echo Estos son los 10 procesos lanzados en el sistema: $(ps faux | head -10 )
    read -p "Pulse ENTER para salir" ENTER
}
function modosimple(){
    echo Estos son los servicios lanzados con el comando TOP bajo criterio: $(top | head -10)
    read -p "Pulse ENTER para salir" ENTER
}
function serviciousandopuerto(){
    echo Estos son los servicios que estan usando un puerto en estos momentos: $(nmap localhost)
    read -p "Pulse ENTER para salir" ENTER
}
function procesosalumno(){
    echo Los procesos que lanza el usuario ALUMNO en su sesión son: $(ps -u alumno -U alumno -j | head -10)
     read -p "Pulse ENTER para salir" ENTER
}
function verarbol(){
    echo Este es el arbol de procesos, es similar a lanzar un ps f. $(pstree)
     read -p "Pulse ENTER para salir" ENTER
}
function llamadasistemaproceso(){
    echo Esta es la muestra a la llamada del proceso NMAP, usamos strace: $(strace nmap) 
     read -p "Pulse ENTER para salir" ENTER
}
function sshlocal(){
    echo Va a conectarse por SSH a su propio PC: $(ssh alumno@00.00.00.00)
     read -p "Pulse ENTER para salir" ENTER
}
function monitorsistemagnome(){
    echo Se va a lanzar el monitor de sistema gnome: $(gnome-system-monitor)
     read -p "Pulse ENTER para salir" ENTER
}
function rendimientocpu(){
    echo Este es el rendimiento de cada CPU: $(mpstat)
     read -p "Pulse ENTER para salir" ENTER
}
function lecturapuerto(){
    echo Se realizará una lectura en tiempo real del usuario alumno por el puerto 22: $(sudo tcpdump -Z alumno)
     read -p "Pulse ENTER para salir" ENTER
}
function borrartemporalesalapagar(){
    echo Se borraran los archivos temporales del equipo: $(sudo rm -fr /tmp/* )
    echo Apagando el sistema ... # $(sudo init 0)
      read -p "Pulse ENTER para salir" ENTER
}
function buscardirectorioconSETGID(){
    echo Busca todos los archivos y directorios que tengan seteado el SGID (grupos) igual a 2: $(find /bin -perm -2000)
      read -p "Pulse ENTER para salir" ENTER
}
function archivosmodificadosenxmes(){
    echo Buscar archivos modificados en un Noviembre del año 2018 : $(find /etc -type f -printf "%Cm-%CY %p\\n" | grep "^11-2018")
      read -p "Pulse ENTER para salir" ENTER
}
function manipularimagenesencarpeta(){
    echo Cambiar imagenes .jpg a .png de la carpeta actual $(mogrify -format png *.jpg)
      read -p "Pulse ENTER para salir" ENTER
    echo Convertir una imagen PNG en JPG indicando la calidad de conversión. $(convert -quality 96 image.png image.jpg)
}
function guardarhistorialdeterminal(){
    echo Se procedera a guardar todos los comandos usados en terminal en historyX.txt : $(history -w ~/history1.txt)
    read -p "Pulse ENTER para salir" ENTER
}
function pararservicio(){
    read -p "Introduce el servicio que desea detener:" serv 
    service $serv stop
    read -p "Pulse ENTER para salir" ENTER
}
function iniciarservicio(){
    read -p "¿Qué servicio desea iniciar?" serv
    service $serv start
    read -p "Pulse ENTER para salir" ENTER
}
function estadoservicio(){
    read -p "¿De qué servicio quieres ver el estado?" serv
    service $serv status
    read -p "Pulse ENTER para salir" ENTER
}
function subirprioridad(){
    read -p "Escriba el PID del procesos que desea SUBIR su prioridad" sube
    renice -20 $sube
    read -p "Pulse ENTER para salir" ENTER
}
function bajarprioridad(){
    read -p "Escriba el PID del proceso que desea BAJAR su prioridad" baja
    renice 19 $baja
    read -p "Pulse ENTER para salir" ENTER
}
function comprimir(){
    read -p "Introduzca el usuario para duardar su home" usuario
    echo "########### Empaquetando /home/$usuario ##########"
    tar cvf /tmp/$usuario.tar /home/$usuario
    echo "########### Comprimiendo archivo ... ############"
    gzip /tmp/$usuario.tar
     read -p "Pulse ENTER para salir" ENTER
}
function pingaips(){
    read -p "Introduzca el archivo con las IPS" $1  
if [ "$1" = "" ] ; then  # No se pasó una lista de ips
   echo "Error: Por favor introduce un nombre de archivo válido, que contenga las direcciones IP para hacer ping."
exit 1
fi
if [ ! -f "$1" ] ; then  # Archivo inválido.
   echo "Error: No puedo encontrar el archivo "$1"."
exit 2
fi
echo "(*) Haciendo ping a los servidores contenidos en el archivo "$1", por favor espere..."
echo
while read IP
do
   ping -c 3 "$IP" >& /dev/null
   
 if [ "$?" != "0" ] ; then   # Houston, tenemos un problema.
   (echo -n "$IP  " ; date) | tee -a noping.log
   echo -e     "${IP} !!! \e[0;31m[X]\e[1;37m"
   nmap "$IP"
 else echo -e  "$IP \e[1;32m[OK]\e[1;37m"
 fi
done < "$1"
echo
echo "Listo!!!"
    
}
function nmappuerto80(){
     echo "Haciendo lectura del puerto local 80."
     nmap -p 80 hostname.domainname.com
}
function crearusuarios(){
    for usuario in `cat usuarios.txt`
do
    usuario =`echo $usuario | cut -d":" -f2`
    nombre=`echo $usuario | cut -d":" -f4`
    apellido=`echo $usuario | cut -d":" -f3`
    nombapel=$apellido", " $nombre
    useradd $usuario -p `mkpasswd temporal` -c $nombapel -d /home/$nombre
done  
IFS=$old_IFS  
}
function borrarusuarios(){
    IFS=$'\n'
for i in `cat usuarios.txt`
do
    usuario=`echo $i | cut -d":" -f2`
    deluser $usuario
done 
IFS=$old_IFS 
}

# PROGRAMA PRINCIPAL
INICIO=0
while true
do
    clear
    echo "Menu de servicios ADMINISTRACION LINUX."
    echo "---------------------------------------"
    echo "1) todoservicios;;"
    echo "2) modosimple;;"
    echo "3) serviciousandopuerto;;"
    echo "4) procesosalumno;;"
    echo "5) verarbol;;"
    echo "6) llamadasistemaproceso;;"
    echo "7) sshlocal;;"
    echo "8) monitorsistemagnome;;"
    echo "9) rendimientocpu;;"
    echo "10) lecturapuerto;;"
    echo "11) borrartemporalesalapagar;;"
    echo "12) buscardirectorioconSETGID;;"
    echo "13) archivosmodificadosenxmes;;"
    echo "14) manipularimagenesencarpeta;;"
    echo "15) guardarhistorialdeterminal;;"
    echo "16) pararservicio;;"
    echo "17) iniciarservicio;;"
    echo "18) estadoservicio;;"
    echo "19) subirprioridad;;"
    echo "20) bajarprioridad;;"
    echo "21) comprimir;;"
    echo "22) pingaips;;"
    echo "23) nmappuerto80;;"
    echo "24) crearusuarios;;"
    echo "25) borrarusuarios;; "
    echo "menu salir"
    echo "---------------------------------------"
    read opcion
    case $opcion in
    1) todoservicios;;
    2) modosimple;;
    3) serviciousandopuerto;;
    4) procesosalumno;;
    5) verarbol;;
    6) llamadasistemaproceso;;
    7) sshlocal;;
    8) monitorsistemagnome;;
    9) rendimientocpu;;
    10) lecturapuerto;;
    11) borrartemporalesalapagar;;
    12) buscardirectorioconSETGID;;
    13) archivosmodificadosenxmes;;
    14) manipularimagenesencarpeta;;
    15) guardarhistorialdeterminal;;
    16) pararservicio;;
    17) iniciarservicio;;
    18) estadoservicio;;
    19) subirprioridad;;
    20) bajarprioridad;;
    21) comprimir;;
    22) pingaips;;
    23) nmappuerto80;;
    24) crearusuarios;;
    25) borrarusuarios;;
    *)echo "Opcion no valida.";
	echo "Pulse Enter para continuar"; read ENTER;;