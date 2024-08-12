#!/bin/bash
apt-get purge libreoffice*
apt-get remove libreoffice*
cd /tmp/
mkdir LibreOffice
cd LibreOffice
wget -c http://download.documentfoundation.org/libreoffice/stable/4.0.0/deb/x86/LibreOffice_4.0.0_Linux_x86_deb.tar.gz
wget -c http://download.documentfoundation.org/libreoffice/stable/4.0.0/deb/x86/LibreOffice_4.0.0_Linux_x86_deb_langpack_es.tar.gz
wget -c http://download.documentfoundation.org/libreoffice/stable/4.0.0/deb/x86/LibreOffice_4.0.0_Linux_x86_deb_helppack_es.tar.gz
tar xzvf LibreOffice_4.0.0_Linux_x86_deb.tar.gz
cd LibreOffice_4.0.0.3_Linux_x86_deb/DEBS/
dpkg -i *.deb
cd desktop-integration/
dpkg -i libreoffice4.0-debian-menus_4.0.0-103_all.deb
tar xzvf /tmp/LibreOffice/LibreOffice_4.0.0_Linux_x86_deb_langpack_es.tar.gz
cd LibreOffice_4.0.0.3_Linux_x86_deb_langpack_es/DEBS/
dpkg -i *.deb
tar xzvf /tmp/LibreOffice/LibreOffice_4.0.0_Linux_x86_deb_helppack_es.tar.gz
cd LibreOffice_4.0.0.3_Linux_x86_deb_helppack_es/DEBS/
dpkg -i *.deb
rm -R /tmp/LibreOffice
