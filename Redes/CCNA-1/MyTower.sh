
#!/bin/sh

# Modificacion del script
git add subida.sh &&
sleep 2
# Principal
git add Exploraciondelared.html &&
git nota "Introduccion a las redes - Networking Academy by Cisco" &&
sleep 2
echo "Archivo(s) de exploracion subido"
# Imagenes
git add images/. &&
git nota "Media - img" &&
echo "Archivo(s) de imagen(es) OK!"
sleep 1
# Videos
git add videos/. &&
git nota "Media - videos" &&
echo "Archivo(s) de video(s) OK!"
# Documentos
git add documentos/. &&
git nota "Media - Docs" &&
echo "Archivo(s) docs OK!"
git add Archivos/. &&
git nota "Media - Others" &&
sleep 2
# Other - Otros.
git add . &&
git nota "Others" && 
sleep 1
clear
git push origin master
echo "Otros archivos  subidos"
sleep 2
echo "+-------------------------------------+"
echo "| Todos los trabajos han finalizado   |"
echo "+-------------------------------------+"
# clear
