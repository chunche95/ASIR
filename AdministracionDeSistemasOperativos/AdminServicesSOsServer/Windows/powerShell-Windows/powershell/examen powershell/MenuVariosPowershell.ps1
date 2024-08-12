<# 

@Descripcion: Este es una estructura de script de PowerShell 5.1 para la administracion de 
		Sistemas Operativos.
@Autor: Paulino Esteban
@Version: 1.0

#>


#Apagado automatico con power shell a las 16h.
# --------------------------------------------

$trigger = New-JobTrigger -Once -At 16:00
Register-ScheduledJob -Name ApagadoAutomatico -ScriptBlock {c:\windows\system32\shutdown.exe /S /T 0} -Trigger $trigger

# Lanzar de manera autonoma Script a las 10.00am todos los dias.
# --------------------------------------------

$Trigger= New-ScheduledTaskTrigger -At 10:00am -Daily # Specify the trigger settings
$User= "NT AUTHORITY\SYSTEM" # Specify the account to run the script
$Action= New-ScheduledTaskAction -Execute "PowerShell.exe" -Argument "C:\PS\StartupScript.ps1" # Specify what program to run and with its parameters
Register-ScheduledTask -TaskName "MonitorGroupMembership" -Trigger $Trigger -User $User -Action $Action -RunLevel Highest -Force # Specify the name of the task


# Comprimir archivo voces en archivo.zip
# --------------------------------------------

Compress-Archive -Path C:\Invoices -DestinationPath C:\Archives\Invoices

# Descomprimir archivo voces.zip en voces
# --------------------------------------------

Expand-Archive -LiteralPath C:\Archives\Invoices.Zip -DestinationPath C:\ InvoicesUnzipped

# ver las variables de objeto del usuario administrador
# --------------------------------------------

Get-LocalUser -Name -administrator- | Select-Object *

# Crear usuario 
# --------------------------------------------

$UserPassword = Read-Host -AsSecureString
New-LocalUser "ElPaco" -Password $UserPassword -FullName "ElPaco" -Description "CompleteVisibility"

# contrase-a nunca caduca - "ElPaco"
# --------------------------------------------

Set-LocalUser -Name ASO -PasswordNeverExpires $False

#Borrar cuenta local ElPaco
# --------------------------------------------

Remove-LocalUser -Name ElPaco -Verbose

# cambiar contrase-a a administrador
# --------------------------------------------

$UserPassword = Read-Host -AsSecureString
Set-LocalUser -Name Administrador -Password $UserPassword -Verbose

# Lista de todos los grupos locales
# --------------------------------------------

Get-LocalGroup

# Añadir un nuevo grupo
# --------------------------------------------

New-LocalGroup -Name 'NuevoGrupo' -Description 'El Grupazo'

# Añadir usuarios al nuevo grupo
# --------------------------------------------

Add-LocalGroupMember -Group 'Administrador' -Member ('NuevoGrupo',-El admin del grupo') -Verbose


# Borrar grupo local
# --------------------------------------------

Remove-LocalGroupMember -Group 'NuevoGrupo' -Member 'guest'


# ver el valor de registro de forma remota de System
# --------------------------------------------

Invoke-Command -ComputerName dc1 -ScriptBlock { Get-ItemProperty -Path 'HKCU:\Software\System' -Name WorkingDirectory}


# Buscar en el registro
# --------------------------------------------

get-childitem -path hkcu:\ -recurse -ErrorAction SilentlyContinue | Where-Object {$_.Name -like "*ASO*"}


# crear nuevo registro con PowerShell, en este caso ASO
# --------------------------------------------

New-ItemProperty -Path "HKCU:\dummy\ASO" -Name "ASO" -Value -ASO  -PropertyType "String"


# Borrar entrada o parametro de registro con powerShell
# --------------------------------------------
# Propiedad
# --------------------------------------------

Remove-ItemProperty -Path "HKCU:\dummy\ASO" -Name "ASO"

# --------------------------------------------
# Entrada a carpeta entera
# --------------------------------------------

Remove-Item -Path "HKCU:\dummy\ASO\*" -Recurse

# --------------------------------------------
# Renombrar registro. de ASO a AdministracionSistemasOperativos
# --------------------------------------------

Rename-Item -Path "HKCU:\dummy\ASO"  AdministracionSistemasOperativos

# Encontrar cuentas bloqueadas en Active Directory
# --------------------------------------------

Search-ADAccount -LockedOut -UsersOnly | Select-Object Name, SamAccountName

# Desbloquear cuenta de AD.
# --------------------------------------------

Unlock-ADAccount -Identity RussellS

# Deshabilitar usuarios que estan en un archivo .CSV
# --------------------------------------------

$users=Import-CSV c:\temp\users.csv
ForEach ($user in $users)
{
     Disable-ADAccount -Identity $($user.name)
}

# Mover un OU a otra direccion de LDAP.
# --------------------------------------------

Set-ADOrganizationalUnit -Identity "OU=Regions,OU=Managers,DC=Enterprise,DC=Com" -ProtectedFromAccidentalDeletion $False

# Renombrar OU por 'Districts'
# --------------------------------------------

Rename-ADObject -Identity "OU=Regions,OU=IT,DC=enterprise,DC=COM" -NewName Districts

#Mover usuario o PC a la OU leyendo un .txt
# --------------------------------------------

# Specify path to the text file with the computer account names.
$computers = Get-Content C:\Temp\Computers.txt

# Specify the path to the OU where computers will be moved.
$TargetOU   =  "OU=Districts,OU=IT,DC=enterprise,DC=com" 
ForEach( $computer in $computers){
    Get-ADComputer $computer |
    Move-ADObject -TargetPath $TargetOU

}

# Ver todos los archivos y subdirectorios de la carpeta compartida
# --------------------------------------------

Get-ChildItem -Force \\fs\Shared -Recurse

# Buscar en directorio filtrado por fecha de modificacion
# --------------------------------------------

Get-ChildItem -Path \\fs\Shared\IT -Recurse -Include *.exe | Where-Object -FilterScript {($_.LastWriteTime -gt '2018-04-01')}

# Crear nueva carpeta(s) en carpeta compartida con archivo vacio
# --------------------------------------------

New-Item -Path '\\fs\Shared\NewFolder\newfile.txt' -ItemType File
$FileName = 'C:\data\log.txt'
If (Test-Path $FileName){
   Remove-Item $FileName
}
New-Item -Path '\\fs\Shared\NewFolder' -ItemType Directory



# Copiar archivos y directorios con PS
# --------------------------------------------

Copy-Item -Path \\fs\Shared\it\users.xlsx -Destination \\fs2\Backups\it\users.xlsx -Force


# Moviendo carpetas de contenidos en otro destino 
# --------------------------------------------

Move-Item -Path \\fs\Shared\Backups -Destination \\fs2\Backups\archive

# Renombrar archivos 
# --------------------------------------------

Rename-Item -Path "\\fs\Shared\temp.txt" -NewName "new_temp.txt"

# Renombrar multiples carpetas con extension
# --------------------------------------------

$files = Get-ChildItem -Path C:\Temp #create list of files
foreach ($file in $files)
{
    $newFileName=$file.Name.Replace("A","B")  #replace "A" with "B"
    Rename-Item $file $newFileName
}


# Ver todos los permisos de usuario actual, en ejecucion.
# --------------------------------------------

[system.enum]::getnames([System.Security.AccessControl.FileSystemRights])


# Ver todos los permisos de una carpeta
# --------------------------------------------

get-acl \\fs1\shared\ASO g| fl

# Super ayuda para los cmdlet 
# --------------------------------------------

Get-Process | Get-Member


# Ver ejemplos de un proceso
# --------------------------------------------

Get-Help Get-Process -Examples


# Iniciar/Parar un proceso - ej Notepad.exe
# ---------------------------------------------

Start-Process notepad
Stop-Process -Name notepad

# Ver el estado de los Servicios.
# ---------------------------------------------

Get-Service | Sort-Object -property Status


# Traer los ultimos 5 eventos de un UID determinado, en este casos 2004
# ---------------------------------------------


[regex]$regex = "(\w+\.\w+\s\(\d+\)\s\w+\s\d+\sbytes)" #armamos nuestro REGEX para detectar los tres procesos
foreach ($server in (gc .\rest.txt)) 
    {
    "=" * 48;' ' * ((48 - $server.length) / 2) + $server + " " * ((48 - $server.length) / 2);"" #algo estetico
    try
        {
            $events = Get-WinEvent -ComputerName $server -MaxEvents 5 @{ID='2004'; 
            ProviderName='Microsoft-Windows-Resource-Exhaustion-Detector'} -ErrorAction stop #la busqueda en si
            foreach ($event in $events) #para cada objeto evento
                {
                    $report = @()
                    foreach ($line in ($event.message).split(',')) #para cada linea del mensaje de cada evento
                        {
                            $mo = $regex.Match($line)
                            [array]$report += $mo.Value #armemos un reporte con lo que haga match contra el regex
                        }
                    $event.timecreated #sumemos la fecha al reporte
                    $report #imprimimos el reporte de procesos
                    "-" * 48;""
                }
 
        } #end try
    catch
        {
            "Server $server did not diagnose Resource Exhaustion";"" #si no hay evento 2004, imprimimos un mensaje
        }
    } #end foreach



# Obtener los 5 primeros procesos ordenados.
# ---------------------------------------------


Get-Process | Select-Object Name, Id, Company | Sort-Object Name | Select-Object -First 5
gps | Select-Object Name, Id, Company | Sort-Object Name | Select-Object -First 5
ps | Select-Object Name, Id, Company | Sort-Object Name | Select-Object -First 5


# Listar los procesos que tengamn consumo alto de tiempo de CPU
# ---------------------------------------------


Get-Process | select cpu,id,name | sort cpu -Descending


# Listar los procesos en ejecucion junto al fabricante
# ---------------------------------------------

ps | select Name,Company


# Ver los programas que se estan ejecutando desde que se arranca el SO
# ---------------------------------------------

Get-WmiObject win32_process | Sort-Object Processid | Select-Object Processid,Name,CommandLine

# 
# ---------------------------------------------

# 
# ---------------------------------------------

# 
# ---------------------------------------------

# 
# ---------------------------------------------

# 
# ---------------------------------------------

# 
# ---------------------------------------------


