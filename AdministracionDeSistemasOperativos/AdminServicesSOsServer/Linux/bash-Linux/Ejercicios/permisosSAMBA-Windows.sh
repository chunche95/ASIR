#!/bin/bash

# Resolviendo problemas de permisos en SAMBA-Windows.
# Intento acceder con mi usuario a una carpeta compartida en samba y no tengo permisos.
# Debemos dar permisos a la carpeta de usuarios de samba

sudo smbpasswd -a usuarioPruebas
