# Ej_2.2.ps1
# Área de un círculo

Set-Variable –name PI –option readonly –value 3.141598
[single]$radio = Read-Host "Escribe el radio del círculo"
[single]$area = 0

$area = $PI * [System.Math]::Pow($radio, 2)
$area