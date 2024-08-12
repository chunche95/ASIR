###############################################################################
#Mostrar modelo de procesador, memoria instalada y modelo/capacidad de discos.
###############################################################################
function cpuram() {
clear
echo processor $(cat /proc/cpuinfo | grep "model name" | head -1)
echo memoria: $(cat /proc/meminfo | grep -i memtotal | awk '{print $2}') KB
echo disco; $(sudo fdisk -l)
echo Pulsa enter para continuar
read enter
}
###############################################################################
# subir prioridad a usuario
###############################################################################
function prioridad() {
clear
renice -n -5 -u gdm
echo Pulsa Enter para continuar
read enter
}
###############################################################################
# Comprobar si apache2 está instalado y si no instalarlo .Decir si está instalado, activo y cuántos procesos tiene
###############################################################################
function apache() {
clear
dpkg -l | grep apache2 &> /dev/null
case $? in
0) echo El servidor Apache  esta instalado; netstat -tlnp | grep apache2 &> /dev/null
    case $? in
        0) echo El servidor apache2 esta activo ;;
        *) echo apache2 no está activo, lo arrancamos; sudo systemctl start apache2 ;;
    esac
*) echo Apache no esta instalado, lo instalamos; sudo apt-get -y install apache2;;
esac
echo Pulsa Enter para continuar
read enter
}
###############################################################################
# Mostrar los mensajes de error y warning del último arranque
###############################################################################
function mensajes(){
clear
    echo journalctl --list-boots
    echo Pulsa Enter para continuar
read enter
}
###############################################################################
# Parar todos los servicios listados en el fichero /tmp/stopservices.txt
###############################################################################
function pararservicios(){
clear
echo Pulsa Enter para continuar
read enter

}
###############################################################################
# Programar reinicio del servicio de red todos los domingos de diciembre a las 23:30
###############################################################################
 function reiniciored(){
clear
     echo "Apagado de todos los servicios de red"
     sudo crontab -e 
     30 23 * * * /etc/init.d/networking stop
     
     sudo service cron restart
    echo Pulsa Enter para continuar
    read enter
 }
###############################################################################
# Mostrar los 10 primeros procesos que más memoria virtual consumen ordenados
# descendentemente. Hay que mostrar pid, memoria virtual, porcentaje de memoria
# física y nombre del proceso (5 veces cada 2 segundos)
###############################################################################
 function procesos(){
clear
    for i in {1 .. 5}
    do 
    ps -eo pid,ppid,cmd,%mem,%cpu --sort=-%mem | head -10 
    done 
    echo Pulsa Enter para continuar
    read enter
 }
 # Programa principal
ENTRADA=0
while true
do
   clear
   echo 'Introduce un número: '
   echo '====================='
   echo '[1] Mostrar modelo de procesador, memoria instalada y modelo/capacidad de discos.'
   echo '[2] Subir prioridad a usuario'
   echo '[3] Comprobar si apache2 está instalado y si no instalarlo .Decir si está instalado, activo y cuántos procesos tiene'
   echo '[4] Mostrar los mensajes de error y warning del último arranque'
   echo '[5] Parar todos los servicios listados en el fichero /tmp/stopservices.txt'
   echo '[6] Programar reinicio del servicio de red todos los domingos de diciembre a las 23:30'
   echo '[7] Mostrar los 10 primeros procesos que más memoria virtual consumen ordenados descendentemente. 
            Hay que mostrar pid, memoria virtual, porcentaje de memoria física y nombre del proceso (5 veces cada 2 segundos)'
   echo '[q] Salir'
   read ENTRADA
   case $ENTRADA in 
   1) cpuram ;;
   2) prioridad ;;
   3) apache ;; 
   4) mensajes ;;
   5) pararservicios ;;
   6) reiniciored ;; 
   7) procesos ;;
   q) clear; echo 'Fin del programa'; read nada; break ;;
   *) echo 'Error! Opción no válida' ;;
   esac
done
