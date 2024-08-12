# Ej_6.5.ps1
# Mostrar agrupados por el identificador de evento, los eventos
#   de seguridad de nuestra máquina que han sucedido en los últimos 3 días,
#   ordenados de mayor a menor por el número  que se haya producido


Get-EventLog Security |Where-Object {$_.timegenerated -ge "2011/07/17 00:00"} `
| Group-Object InstanceId |Sort-Object count -Descending |Format-Table -AutoSize


#Get-EventLog Security |Where-Object {$_.timegenerated -ge "2011/07/17 00:00"} `
#| Group-Object Message |Sort-Object count -Descending |Format-Table -AutoSize
