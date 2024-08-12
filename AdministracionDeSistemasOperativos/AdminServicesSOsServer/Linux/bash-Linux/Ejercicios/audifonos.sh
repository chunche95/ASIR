#!/bin/bash

# @Title: Off speaker when out headphones.
# @Descripción: Script para quitar el volumen cuando se desconectan los audífonos
# NOTA: El script hace uso de alsa-utils por lo que debe instalarse.
# @Author: Pauchino09

cd ~
#si no existe el archivo se "instala" en realidad solo copia un archivo
if [ ! -f ".audifonos/con" ]; then
mkdir .audifonos
read -n1 -r -p "Por favor conecte los audifonos y presione una tecla " l
echo;
cp "/proc/asound/card0/codec#0" ".audifonos/con"
echo "si los audifonos estaban desconectados borre la carpeta $HOME/.audifonos y repita"
read -n1 -r -p "instalado - ejecute de nuevo para iniciar" k
echo;
else
encontrado="1"
while true; do
echo $encontrado
 #diff muestra las diferencias entre el archivo codec#0 de alsa y el que copiamos con los audifonos puestos y luego filtramos la info sobre la conexion de audifonos con grep
 diff "/proc/asound/card0/codec#0" ".audifonos/con" | grep Pin-ctls 
 #si $? == 0 entonces los audifonos estan desconectados
 if [ "$?" == "0" ]; then
   #la variable encontrado solo es una forma de controlar el flujo del programa asi permito que cuando este desconectado los audifonos se pueda subir el volumen 
   if [ $encontrado == "0" ]; then
   amixer sset 'Master' 0%
   encontrado="1"
   fi
 
 else
  encontrado="0"

 fi
 #espero 0.5 para que no sea pesado el proceso pero si se quisiera que fuera instantanea se puede quitar o pponer menos tiempo
 sleep 0.1
 
done
fi