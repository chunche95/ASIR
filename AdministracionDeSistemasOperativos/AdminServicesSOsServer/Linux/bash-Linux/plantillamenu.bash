#!/bin/bash
clear
#
# Script que muestra un menú tipo utilizando funciones
# Administracion de Sistemas Informaticos en Red
#
# Funciones 
#
parar_servicio()
{
   clear
   echo 'Introduce el servicio que deseas parar: '
   read servicio
   service $servicio stop
   echo 'Pulse una tecla...'
   read nada
}

arrancar_servicio()
{
   clear
   echo 'Introduce el servicio que deseas arrancar: '
   read servicio
   service $servicio start
   echo 'Pulse una tecla...'
   read nada
}

subir_prioridad()
{
   clear
   echo 'Introduce el PID del proceso: '
   read pid
   renice -20 $pid
   echo 'Pulse una tecla...'
   read nada
}

actualizacion_sistema()
{
   clear
   echo '------Actualizando el sistema------'
   apt-get update
   echo 'Pulse una tecla...'
   read nada
}

comprimir()
{
   clear
   echo 'introduce el usuario para guardar su home'
   read usuario
   echo '------Empaquetando------'
   tar cvf /tmp/$usuario.tar /home/$usuario
   echo '------Comprimiendo------'
   gzip /tmp/$usuario.tar
   echo 'Pulse una tecla...'
   read nada
}
bajar_prioridad()
{
   clear
   echo 'Introduce el PID del proceso: '
   read pid
   renice 19 $pid
   echo 'Pulse una tecla...'
   read nada
}

estado_servicios()
{
   clear
   echo 'Estado de todos los servicios del sistema'
   service --status-all
   echo 'Pulse una tecla...'
   read nada
}

procesos()
{
 top
}

# Programa principal
ENTRADA=0
while true
do
   clear
   echo 'Introduce un número: '
   echo '====================='
   echo '[1] Parar el servicio'
   echo '[2] Arrancar servicio'
   echo '[3] Subir prioridad de proceso'
   echo '[4] Actualización del sistema'
   echo '[5] Comprimir home de usuario en /tmp'
   echo '[6] Bajar prioridad de proceso'
   echo '[7] Comprobar estado de los servicios del sistema'
   echo '[8] Ver procesos'
   echo '[9] Salir'
   read ENTRADA
   case $ENTRADA in 
   1) parar_servicio ;;
   2) arrancar_servicio ;;
   3) subir_prioridad ;; 
   4) actualizacion_sistema ;;
   5) comprimir ;;
   6) bajar_prioridad ;; 
   7) estado_servicios ;;
   8) procesos ;;
   9) clear; echo 'Fin del programa'; read nada; break ;;
   *) echo 'Error! Opción no válida' ;;
   esac
done
