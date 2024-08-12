Function Show-Menu{
Read-Host “Bienvenido al Asistente de POWER SHELL de ASO LOKO — Pulse una Tecla para continuar”
Clear-Host
Write-Host “ASISTENTE POWER SHELL”
Write-Host “Aqui se muestra una lista con las opciones disponibles del asistente, introduzca el numero correspondiente de la opcion que desees ejecutar”
Write-Host “1 -> Crear Unidades Organizativas”
Write-Host “2 -> Crear nuevas cuentas de usuario”
Write-Host “3 -> Crear nuevo grupo”
Write-Host “4 -> Mover usuario a otra Unidad Organizativa”
Write-Host “5 -> Agregar un usuario a un grupo”
Write-Host “6 -> Ver miembros de un grupo”
Write-Host “7 -> Ver miembros de una Unidad Organizativa ”
Write-Host “8 -> Ver informacion de un usuario especifico”
Write-Host “9 -> Introducir usuarios mediante libro CSV”
Write-Host “10 -> Monitorización de procesos”
Write-Host “11 -> crear recursos compartidos”
Write-Host “12 -> Ver el volumen de los discos”
Write-Host “13 -> Listar los equipos del dominio”
Write-Host “14 -> Salir del asistente”
[int]$opcion = Read-Host “Seleccione opción”
return $opcion
}

Function Crearunidadorganizativa{
[string]$unidad = Read-Host “Introduzca el nombre de la unidad organizativa que deseas crear”
new-adorganizationalunit $unidad
}
Function Crearusuario{
Write-Host “Ha seleccionado usted crear nueva cuenta de usuario”
[string]$nomre_cuentausuario=Read-Host “Nombre de cuenta del usuario”
[System.Security.SecureString]$contra_usuario=Read-Host “Contraseña del usuario” -AsSecureString
if($contra_usuario.Length -ne 0){
$existpassword=1
$user_changepasswordatlogon=Read-Host “¿Desea que el usuario cambie la contraseña en el proximo inicio introduzca 0 para no y 1 para si?”
if ($user_changepasswordatlogon -eq 0){$user_changepasswordatlogon=$false}else{$user_changepasswordatlogon=$true}
} else {
$existpassword=0
}
[string]$nombreusuario=Read-Host “Nombre del usuario que vamos a introducir”
[string]$apellidousuario=Read-Host “Porfavor, introduzca el apellido del usuario”
[string]$emailusuario=Read-Host “introduzca la direción de correo electrónico del usuario”
[string]$pathusuario=Read-Host “Introducie el Path del usuario, por ejemplo OU=usuarios,OU=oficina,DC=cidacos,DC=com”
$user_displayname=”$nombreusuario $apellidousuario”
$user_enable=Read-Host “¿Desea usted que la cuenta que va a crear este activada, introduzca 0 para no y 1 para si?”
if ($user_enable -eq 0){$user_enable=$false}else{$user_enable=$true}
if($existpassword -eq 1){
New-ADUser -name $nomre_cuentausuario -UserPrincipalName $nomre_cuentausuario@cidacos.com -AccountPassword $contra_usuario -ChangePasswordAtLogon $user_changepasswordatlogon -GivenName $nombreusuario -Surname $user_surname -DisplayName $user_displayname -EmailAddress $emailusuario -Enabled $user_enable -path $pathusuario
}else{
New-ADUser -name $nomre_cuentausuario -UserPrincipalName $nomre_cuentausuario@cidacos.com -GivenName $nombreusuario -Surname $apellidousuario -DisplayName $user_displayname -EmailAddress $emailusuario -Enabled $user_enable -path $pathusuario
}
Write-Host “Felicidades, el usuario $nombreusuario con el nombre de cuenta $nomre_cuentausuario ha sido creado exitosamente en $pathusuario”
Read-Host “Presione Enter para Continuar”
cls
}

function creargrupo{

Write-Host “A seleccionado usted crear nuevo grupo”
[string]$group_name=Read-Host “Introduzca el nombre del grupo que desea introducir”
$group_scope=Read-Host “¿Que tipo de grupo desea crear? introduzca 0 para grupo local, 1 para grupo global y 2 para universal”
$group_category=Read-Host “¿Grupo de distribucion o seguridad? introduzca 0 para distribucion y 1 para seguridad”
[string]$group_patch=Read-Host “Introduzca el path del grupo, por ejemplo OU=usuarios,OU=oficina,DC=cidacos,DC=com”
New-ADGroup -name $group_name -GroupCategory $group_category -GroupScope $group_scope -DisplayName $group_name -path $group_patch
Write-Host “FELICIDADES usted a creado el grupo $group_name en $group_patch”
Read-Host “Presione Enter para Continuar”
cls

}

function moverusuarioauo{

Write-Host “Ha seleccionado usted mover un usuario de Unidad Organizativa”
[string]$user_name=Read-Host “Introduce el nombre de usuario que deseas mover”
[string]$user_targetpath=Read-Host “Por favor, introduce el path de destino a donde deseas mover este usuario, por ejemplo OU=usuarios,OU=oficina,DC=cidacos,DC=com”
Move-ADObject $user_name -TargetPath $user_targetpath
Write-Host “Se ha movido $user_name a $user_targetpath”
Read-Host “Presione Enter para Continuar”
cls
}

function agregarusuarioaungrupo{

Write-Host “Ha seleccionado usted añadir un usuario a un grupo”
[string]$user_name=Read-Host “Introduce nombre de usuario que quieras añadir a un grupo”
[string]$user_members=Get-ADUser -Filter {sAMAccountName -eq $user_name} -Properties DistinguishedName | select -expand DistinguishedName
[string]$group_name=Read-Host “introduce el nombre del grupo al que deseas agregarlo”
[string]$group_identity=Get-ADGroup -Filter {sAMAccountName -eq $group_name} -Properties DistinguishedName | select -expand DistinguishedName
Add-ADGroupMember $group_identity -Members $user_members
Write-Host “FELICIDADES!! Se ha agregado el usuario $user_name al grupo $group_name”
Read-Host “Presione Enter para Continuar”
cls
}

function vermiembrosgrupo{
Write-Host “Ha seleccionado usted ver miembros de un grupo”
[string]$group_name=Read-Host “¿Que grupo deseas ver?”
[string]$miem=Read-Host “¿Desea convertir el resultado de esta instrución a HTML?”
If ($miem -eq “si”) {
[string]$group_identity=Get-ADGroup -Filter {sAMAccountName -eq $group_name} -Properties DistinguishedName | select -expand DistinguishedName
Get-ADGroupMember $group_identity | ConvertTo-Html | Out-File c:\Compartido\Repositorio\web\vergrupo.html
}
If ($miem -eq “no”) {
[string]$group_identity=Get-ADGroup -Filter {sAMAccountName -eq $group_name} -Properties DistinguishedName | select -expand DistinguishedName
Get-ADGroupMember $group_identity
}
Write-Host “Esta es la lista de miembros del grupo $group_identity”
Read-Host “Presione Enter para Continuar”
cls
}
function vermiembrosuo{
Write-Host “Ha seleccionado usted ver miembros de una Unidad Organizativa”
[string]$miemuo=Read-Host “¿Desea convertir el resultado de esta instrución a HTML?”
If ($miemuo -eq “si”) {
[string]$ou_name=Read-Host “Introduzca el nombre de la unidad organizativa que deseas visualizar”
[string]$ou_identity=Get-ADOrganizationalUnit -Filter {ou -eq $ou_name} -Properties DistinguishedName | select -expand DistinguishedName
Get-ADUser -Filter {objectCategory -eq “CN=Person,CN=Schema,CN=Configuration,DC=cidacos,DC=com”} -SearchBase $ou_identity | ConvertTo-Html | Out-File c:\Compartido\Repositorio\web\miembrosuo.html
Write-Host “el fichero HTML ha sido creeado con exito en c:\Compartido\Repositorio\web\miembrosuo.html”
}
If ($miemuo -eq “no”) {
[string]$ou_name=Read-Host “Introduzca el nombre de la unidad organizativa que deseas visualizar”
[string]$ou_identity=Get-ADOrganizationalUnit -Filter {ou -eq $ou_name} -Properties DistinguishedName | select -expand DistinguishedName
Get-ADUser -Filter {objectCategory -eq “CN=Person,CN=Schema,CN=Configuration,DC=cidacos,DC=com”} -SearchBase $ou_identity
Write-Host “Estos son los Miembros de la Unidad organizativa $ou_identity”
}
Read-Host “Presione Enter para Continuar”
cls
}

function informacionusuario{
Write-Host “Ha seleccionado usted ver infromación de un usuario especifico”
[string]$usu=Read-Host “¿Desea convertir el resultado de esta instrución a HTML?”
[string]$user_name=Read-Host “Introduzca el nombre de usuario que deseas visualizar”
If ($usu -eq “si”) {
Get-ADUser -Filter {sAMAccountName -eq $user_name} -Properties lastLogon, logonCount, mail | ConvertTo-Html | Out-File c:\Compartido\Repositorio\web\infousuario.html
Write-Host “el fichero HTML ha sido creeado con exito en c:\Compartido\Repositorio\web\infousuario.html”
Read-Host “Presione Enter para Continuar”
cls
}
If ($usu -eq “no”) {
Write-Host “Esta es la información del usuario $user_name”
Get-ADUser -Filter {sAMAccountName -eq $user_name} -Properties lastLogon, logonCount, mail
Read-Host “Presione Enter para Continuar”
cls
}
}

function importarcsv{
[string]$ruta = Read-Host “Introduzca la ruta absoluta de la ubicacion del archivo CSV que desee importar”
Import-Csv $ruta -Delimiter “;”
}

function monitorizacion{
[string]$mon=Read-Host “¿desea convertir el resultado de este comando a html?”
[string]$sort=Read-Host “¿Por que desea ordenar el resultado, nombre(name), memoria(vm), cpu(cpu)?”
If ($mon -eq “si”) {
get-Process | sort-object vm -descending | Select-Object $sort -first 10 | ConvertTo-html |Out-File c:\Compartido\WebFiles\monitorizacion.html
}
If ($mon -eq “no”) {
get-Process | sort-object vm -descending | Select-Object $sort -first 10
}
Write-Host “Se ha realizado la operación solicitada, ha seleccionado ordenar por $sort”
}

function recursocompartido{
Write-Host “Bienvenido al asistente de creación de recusrsos compartidos, pulse entrer para continuar”
[string]$nombre=Read-Host “Introduzca el nombre del recurso compartido”
[string]$ruta=Read-Host “Introsuzca la ruta absoluta del directorio a compartir”
[string]$desc=Read-Host “Introsuzca la descripción”
[string]$full=Read-Host “Introduzca el nombre de usuario con todos los permisos, por ejemplo Administrador”

New-SmbShare –Name $nombre –Path $ruta –Description “$desc” –FullAccess $full
Write-Host “se ha creado el recurso compartido $nombre en $ruta con los permisos para el usuario $full”
[string]$moni=Read-Host “desea monitorizar los recursos compartidos(si/no)”
If ($moni -eq “si”) {
Get-SmbSession
}
}
function volumendiscos{
[string]$vol=Read-Host “¿desea convertir el resultado de este comando a html?”
If ($vol -eq “si”) {
$unidades = Get-Volume | select -Property DriveLetter,SizeRemaining,Size | ConvertTo-html |Out-File c:\Compartido\WebFiles\verdiscos.html
foreach ($unidad in $unidades){
$id = $unidad.DriveLetter
$tam = ($unidad.Size/1048576)
$lib = ($unidad.SizeRemaining/1048576)
if ($lib -gt ($tam*0.15)) {
write-host Unidad $id Tamaño $tam MB Libre $lib MB -foregroundcolor “green”
}
else{
write-host Unidad $id Tamaño $tam MB Libre $lib MB -foregroundcolor “red”
}

if ($lib -gt ($tam*0.25)) {
write-host Unidad $id Tamaño $tam MB Libre $lib MB -foregroundcolor “yellow”
}
}
Write-Host “La operacion ha sido realizada con exito en c:\Compartido\WebFiles\verdiscos.html”
}
If ($vol -eq “no”) {
$unidades = Get-Volume | select -Property DriveLetter,SizeRemaining,Size
foreach ($unidad in $unidades){
$id = $unidad.DriveLetter
$tam = ($unidad.Size/1048576)
$lib = ($unidad.SizeRemaining/1048576)
if ($lib -gt ($tam*0.15)) {
write-host Unidad $id Tamaño $tam MB Libre $lib MB -foregroundcolor “green”
}
else{
write-host Unidad $id Tamaño $tam MB Libre $lib MB -foregroundcolor “red”
}

if ($lib -gt ($tam*0.25)) {
write-host Unidad $id Tamaño $tam MB Libre $lib MB -foregroundcolor “yellow”
}
}
}
}
function listadodominio{
[string]$dom=Read-Host “¿desea convertir el resultado de este comando a html?”
If ($dom -eq “si”) {
Get-ADComputer -Filter {objectCategory -eq “CN=Computer,CN=Schema,CN=Configuration,DC=cidacos,DC=com”} | ConvertTo-html |Out-File c:\Compartido\WebFiles\dominio.html
}
If ($dom -eq “no”) {
Get-ADComputer -Filter {objectCategory -eq “CN=Computer,CN=Schema,CN=Configuration,DC=cidacos,DC=com”}
}

}

function salir{
exit
}
:Bucle do
{

switch (Show-Menu)
{
1{Crearunidadorganizativa;break}
2{Crearusuario;break}
3{creargrupo;break}
4{moverusuarioauo;break}
5{agregarusuarioaungrupo;break}
6{vermiembrosgrupo;break}
7{vermiembrosuo;break}
8{informacionusuario;break}
9{importarcsv;break}
10{monitorizacion;break}
11{recursocompartido;break}
12{volumendiscos;break}
13{listadodominio;break}
14{salir;break}
15{break Bucle}

}
}
while (0 -lt 1)
Clear-Host