
###############
#  cyberOps   #
###############
cd cyberOps/ 
sh up.sh
echo "------------------"
echo "Terminado (x1)"
echo "------------------"

##############################
#  cybersecurity Essentials  #
##############################
cd CybersecurityEssentials/ 
sh up.sh
echo "------------------"
echo "Terminado (x1)"
echo "------------------"

###########################################
#  DEMO-LaboratoriosSeguridadinformatica  #
###########################################
cd DEMO-LaboratoriosSeguridadinformatica/ 
sh up.sh
echo "------------------"
echo "Terminado (x1)"
echo "------------------"

####################
# OTROS CONTENIDOS #
####################
git add . &&
git nota "Other contents" &&
git sube
echo "=> 0%"
echo "===> 25%"
echo "======> 50%"
echo "=========> 75%"
echo "===========> 100%"
echo "Fin de subida de archivos"

sleep 5
git status