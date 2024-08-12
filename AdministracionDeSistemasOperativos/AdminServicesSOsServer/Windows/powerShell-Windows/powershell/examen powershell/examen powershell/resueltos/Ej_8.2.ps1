# Ej_8.2.ps1
# Mostrar todos los alias que trabajen con Object e
#    Item, ordenados por su nombre

Set-Location Alias:
Get-ChildItem |where {($_.Definition -like "*Object*") `
    -or ($_.Definition -like "*Item*")} `
    |Sort-Object -Property Name