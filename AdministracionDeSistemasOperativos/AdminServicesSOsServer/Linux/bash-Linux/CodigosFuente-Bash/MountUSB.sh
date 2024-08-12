#!/bin/bash

sudo -i
sudo fdisk -l
# /etc /fstab
sudo nano -l /etc /fstab

# Agregar line 
/dev/sdb1/media/usb # vfat por defecto, rw, auto, usuarios, uid = 1000, gid = 100, fmask = 0111, dmask = 000, fmask = 137, utf8, errores = continuar 0 0
# Monte usb
sudo umount -a

# cree la carpeta
sudo mkdir /media/usb

# Ruta a usb & permisos
sudo mount -rw /dev/sdb1/media/usb

# update 
mount -o remontaje, rw /
Napraw usb
fsck /dev/md3
fsck -p /dev/md3
tune2fs -e continue /dev/sda1