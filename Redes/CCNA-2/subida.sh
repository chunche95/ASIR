#!/bin/bash
echo " Script de subida a GitHub repositorio: https://github.com/chunche95/FundamentalCourse-CCNA2" 
echo ""
sleep 2
# README
echo "README"
git add README.md &&
git nota "GitHub repositorio: https://github.com/chunche95/FundamentalCourse-CCNA2" &&
git sube
echo "Reame -- Terminado"
# assets
git add assets/. && 
git commit -m "Other Files" &&
git sube 
echo " Archivos de assets  --  Terminado." 
# Index
git add index.html &&
git nota "Index - CCNA2" &&
git sube 
echo "Index -- Terminado"
# Contents
git add contents/Welcome.html &&
git nota "Introduction -- CCNA2" && 
git sube 
git add contents/routingConcepts.html &&
git nota "Introduction -- CCNA2" && 
git sube 
git add contents/plantilla.txt && 
git nota "Introduction -- CCNA2"
git add contents/images/. &&
git nota "Introduction -- CCNA2 (Images)" &&
git sube 
git add contents/videos/. &&
git nota "Introduction -- CCNA2 (Videos)" &&
git sube 
git add contents/Documents/. &&
git nota "Introduction -- CCNA2 (Docs)" &&
git sube 
git add contents/. &&
git nota "Introduction -- CCNA2" &&
git sube 
echo "Archivo(s) contents -- Terminado"
# Images
git add images/. && 
git nota "Media - images" && 
git sube 
echo "Archivos Media imagenes -- Terminado"
# videos
git add contents/videos/. && 
git nota "Introduction -- CCNA2 (videos)" &&
git sube 

# Script
git add subida.sh && 
git nota "Script update repository GitHub" && 
git sube 
echo "Script de subida de archivos -- Terminado"
sleep 5
echo "Script terminado"
clear