# piramide.ps1
# Administración de Sistemas Operativos – 2ASIR

Write-Output "Vamos a hacer una piramide!"
$numero=Read-Host "Introduce un numero, por favor"
$numero=[int]$numero

for ($contador=1; $contador -le $numero; $contador++) {
    for ($veces=1; $veces -le $contador; $veces++) {
    Write-Host $contador -NoNewLine
    }
    Write-Host " "
}