#Conexión remota a controladores de dominio con PowerShell

#Seleccion de dominio, listado de los controladores  conexion.

      #Instalación del modulo de administracion de Active directory para PowerShell

Write-Host ‘Se va a instalar el modulo de administracion de Active directory de powershell’ -ForegroundColor “Yellow”

Add-WindowsFeature RSAT-AD-PowerShell

          #Definicion de variables para el dominio y usuario para la conexion.

$domain=Read-Host ‘Introduzca dominio’

$User=Read-Host ‘Introduzca nombe de usuario para validarse’

      #Query al dominio para listar los controladores y seleccion e a cual queremos conectar.

netdom query dc /domain $domain

$server=Read-Host ‘Introduzca servidor’

         #Peticion de credenciales para la conexion.

$AdminCredentials = Get-Credential “$domain\$User”

         #Muestra el domino y el controlador seleccionado y establece la conexion con este con las credenciales introducidas.

echo ‘Ha seleccionado el dominio:’

Write-Host $domain -ForegroundColor “Yellow”

echo ‘y el servidor’

Write-Host $server -ForegroundColor “Yellow”

Write-Host ‘CONECTANDO….’ -ForegroundColor “red”

Enter-PSSession -ComputerName $server -Credential $AdminCredentials