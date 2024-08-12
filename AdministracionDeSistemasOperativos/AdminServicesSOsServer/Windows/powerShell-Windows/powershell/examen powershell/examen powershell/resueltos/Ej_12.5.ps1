# Ej_12.5.ps1
# Mostrar un listado en página web de todos los
#    objetos que se encuentren en el almacén de certificados

Set-Location Cert:

Get-ChildItem –Recurse |ConvertTo-Html `
    |Out-File "F:\Documents\Cursos\2011-06 - Administrador de redes\Administrador de redes - Mód. 3 PowerShell\Ejemplos\Ej_12.5.html"

Invoke-Item "F:\Documents\Cursos\2011-06 - Administrador de redes\Administrador de redes - Mód. 3 PowerShell\Ejemplos\Ej_12.5.html"