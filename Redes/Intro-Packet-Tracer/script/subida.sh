
#!/bin/sh
clear
# Modificacion del script
git add subida.sh &&
git nota "Script de subida de archivos" &&
git sube
# README.md
git add ../README.md &&
git nota "Intro to Packet Tracer - Networking Academy by Cisco - Beca Cisco" &&
git sube
# Modificacion de estilo y config. página
# Estilo
git add ../assets/css/. &&
git nota "Estilo - página." &&
git sube 
# js, sass,fonts
git add ../assets/. &&
git nota "Config. pagína" && 
git sube 
# Principal
git add ../index.html &&
git nota "Introduction to Packet Tracer. - Networking Academy by Cisco" &&
git sube
sleep 2
echo "Archivo(s) de exploracion subido"
# Contents
git add ../contents/chapter1.html &&
git nota "Capítulo 1 - Intro Packet Tracer" &&
git sube 
git add ../contents/chapter2.html &&
git nota "Capítulo 2 - Intro Packet Tracer" &&
git sube 
git add ../contents/chapter3.html &&
git nota "Capítulo 3 - Intro Packet Tracer" &&
git sube 
git add ../contents/chapter4.html &&
git nota "Capítulo 4 - Intro Packet Tracer" &&
git sube 
git add ../contents/chapter5.html &&
git nota "Capítulo 5 - Intro Packet Tracer" &&
git sube 
git add ../contents/chapter6.html &&
git nota "Capítulo 6 - Intro Packet Tracer" &&
git sube 
git add ../contents/chapter7.html &&
git nota "Capítulo 7 - Intro Packet Tracer" &&
git sube 
git add ../contents/chapter8.html &&
git nota "Capítulo 8 - Intro Packet Tracer" &&
git sube 
# Imagenes
git add ../images/. &&
git nota "Media - img" &&
git sube
echo "Archivo(s) de imagen(es) OK!"
sleep 1
# Videos
git add ../videos/. &&
git nota "Media - videos" &&
git sube
echo "Archivo(s) de video(s) OK!"
# Documentos
git add ../documentos/. &&
git nota "Media - Docs" &&
git sube
echo "Archivo(s) docs OK!"
git add ../archivos/. &&
git nota "Media - Others" &&
git sube
sleep 2
# Other - Otros.
git add ../ &&
git nota "Others" && 
git sube
echo "Otros archivos  subidos"
sleep 2
# clear
