
#!/bin/sh

# Modificacion del script
git add subida.sh &&
git nota "Script Up docs in Github" &&
git sube
echo -e "\e[42mScript subido -  OK! \e[49m"
# README
git add ../README.md &&
git nota "Soft Skills - Cisco" &&
git sube
echo -e "\e[42mREADME subido -  OK! \e[49m"
# Principal
git add ../index.html &&
git nota "Introduction Soft Skills - Networking Academy by Cisco" &&
git sube
echo -e "\e[42mArchivo(s) de exploracion subido \e[49m"
# Estilo
git add ../assets/. &&
git nota "Style" &&
git sube
echo -e "\e[42mArchivo(s) de exploracion subido \e[49m"

# Imagenes
git add ../images/. &&
git nota "Media - img" &&
git sube
echo -e "\e[42mArchivo(s) de imagen(es) OK! \e[49m"
# Videos
git add ../videos/. &&
git nota "Media - videos" &&
git sube
echo -e "\e[42mArchivo(s) de video(s) OK! \e[49m"
# Documentos
git add ../docs/. &&
git nota "Media - Docs" &&
git sube
echo -e "\e[42mArchivo(s) docs OK! \e[49m"
git add ../folder/. &&
git nota "Media - Others" &&
git sube
# Other - Otros.
git add . &&
git nota "Others" && 
git sube
echo -e "\e[42mOtros archivos  subidos \e[49m"
sleep 2
# clear
