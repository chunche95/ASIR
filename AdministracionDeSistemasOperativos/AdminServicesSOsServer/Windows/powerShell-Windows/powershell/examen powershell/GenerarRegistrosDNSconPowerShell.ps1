#Generar registros DNS con PowerShell
$zone=Read-Host ‘
Introduzca el dominio’
Import-CSV -Delimiter “,” -Path “c:\DNS.txt” |   foreach-object{
$hostName=$_ .hostName
$ip=$_ .ip
Add-DNSServerResourceRecordA -ZoneName $zone -Name $hostName
-IPv4Address $ip -CreatePtr
}