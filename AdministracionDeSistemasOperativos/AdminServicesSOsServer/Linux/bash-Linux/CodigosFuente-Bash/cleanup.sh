#!/bin/bash
# Muestra por pantalla un mensaje y luego repara las instalaciones que no fueron terminadas, y por ultimo borra paquetes descargados,etc.
echo "Cleaning Up" && apt-get -f install && apt-get autoremove && apt-get -y autoclean && apt-get -y clean
