#!/bin/bash
IFS=$'\n'
for i in `cat usuarios.txt`
do
    usuario=`echo $i | cut -d":" -f2`
    deluser $usuario
done 
IFS=$old_IFS 