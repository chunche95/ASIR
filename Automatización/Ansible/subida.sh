#!/bin/sh

git add README.md &&
git commit -m "Introducción a ANSIBLE" &&
git push origin master
echo "Readme subido"

git add images/. &&
git commit -m "Imagenes" &&
git push origin master
echo "Imágenes subidas"

git add . &&
git commit -m "Recursos ansible" &&
git push origin master
echo "Otros recursos subidos"

git add subida.sh &&
git commit -m "Script de subida de archivos" &&
git push origin master 
echo "Script subido"

echo ""
echo "---------------------"
echo "| Trabajo terminado |"
echo "---------------------"
echo ""
sleep 5
clear
git status
sleep 5
clear 