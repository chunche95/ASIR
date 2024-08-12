#!/bin/bash
IFS=$'\n'
for usuario in `cat usuarios.txt`
do
    usuario =`echo $usuario | cut -d":" -f2`
    nombre=`echo $usuario | cut -d":" -f4`
    apellido=`echo $usuario | cut -d":" -f3`
    nombapel=$apellido", " $nombre
    useradd $usuario -p `mkpasswd temporal` -c $nombapel -d /home/$nombre
done  
IFS=$old_IFS    

