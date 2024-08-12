#!/bin/bash

echo "------------------------------------------"
echo "		Actualización del repo		"
echo "------------------------------------------"
echo ""
git pull
sleep 3
clear
echo "------------------------------------------"
echo "		Subiendo cambios		"
echo "------------------------------------------"
echo ""
git add  index.*
git nota "Principal page of the quiz game project"
git sube
echo "-------------------------------------------"
echo ""
git add  app.*
git nota "Principal CSS page of the quiz game project"
git sube
echo "-------------------------------------------"
echo ""
git add game.*
git nota "Game page of the quiz project"
git sube
echo "-------------------------------------------"
echo ""
git add highscores.*
git nota "Score page of the quiz project"
git sube
echo "-------------------------------------------"
echo ""
git add end.*
git nota "Finish page of the quiz project"
git sube
echo "-------------------------------------------"
echo ""
echo "-------------------------------------------"
echo ""
git add question.*
git nota "Question page of the quiz project"
git sube
echo "-------------------------------------------"
echo ""
git add logo.jpg
git nota "Logo"
git sube
echo "-------------------------------------------"
echo ""
git README.md
git nota "Introduction for this project - Pau Quiz"
git sube
echo "-------------------------------------------"
echo ""
git add .
git nota "Other files for this project"
git sube
echo "-------------------------------------------"
echo ""
git add up.sh
git nota "Update the repository in GitHub"
git sube
echo "-------------------------------------------"
echo ""
echo "+--------------------------------------------------+"
echo "| Fin de ejecución del script - Actualizando repo. |"
echo "+--------------------------------------------------+"
read -p "Pulse ENTER para salir" salir
clear
echo "==================================================="
git status
echo "==================================================="
sleep 4
clear
sleep 3
echo ""
echo "					再见"
echo "			_________________________________"
echo "				 © Human Computing ® "
echo "				█║▌│█│║▌║││█║▌║▌║█║▌│█"
echo "			_________________________________"
echo ""
sleep 4
clear
