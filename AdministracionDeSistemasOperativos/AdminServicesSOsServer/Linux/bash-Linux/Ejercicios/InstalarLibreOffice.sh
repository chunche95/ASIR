#!/bin/bash

# La nueva version de Ubuntu no tiene LibreOffice instalado, lo hacemos de forma manual. Lanzamos:

sudo apt-get remove --purge openoffice*.*
sudo add-apt-repository ppa:libreoffice/ppa
sudo apt-get update
sudo apt-get install libreoffice

# Instalando las personalizaciones de LO.

# Si se usa Gnome
sudo apt-get install libreoffice-gnome
# Si se usa KDE.
# sudo apt-get install libreoffice-kde
