#!/bin/bash

# declare variable
STR_CHMOD="_k3n-F0llEtt"
DATE=$(date +"%d-%b-%Y")

# show variable
echo $STR_CHMOD

# Change permissions
chmod -R 775 .
echo "[OK]";