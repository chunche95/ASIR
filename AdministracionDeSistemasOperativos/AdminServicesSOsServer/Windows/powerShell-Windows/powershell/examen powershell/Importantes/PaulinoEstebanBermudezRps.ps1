#Menu examen muestra
function menu1 {
 Clear-Host
    Get-Process | sort-object -descending -property workingset64 | format-table -property Sessionid,path,threads,workingset64
}

function menu2 {
 Clear-Host
    Get-NetAdapter -Physical
    exit
     netsh 
     interface ipv4
        show interface
        show interface 3
          exit

}

function menu3 {
 Clear-Host
    Write-Host "Hecho"
    Get-ItemProperty -Path 'HKLM:\SYSTEM\CurrentControlSet\Services\Tcpip\Parameters' -Name IPEnableRouter


}

function menu4 {
 Clear-Host
 W32tm /query /status /verbose  
}

function menu5 {
 Clear-Host
 $servicio=c:\stopservices.txt
  Stop-Service $servicio
  Write-Host "Servicios detenidos..."
}

function menu6 {
 Clear-Host
 $trigger=New-JobTrigger -Weekly -DaysOfWeek Friday -at 12:35
 Get-NetAdapter -Name "*" | Disable-NetAdapter -Confirm:$false
 Get-NetAdapter -Name "*" | Enable-NetAdapter -Confirm:$false
}

function menu7 {
 Clear-Host
 Get-ChildItem -path C:\wsusoffline -exclude *.pdf,*.bat ,*.ps1 -recurse -file -erroraction silentlycontinue | Where-Object {$_.LastWriteTime -lt (Get-Date).AddDays(-30)}  | ForEach-Object { Write-Host sdelete $_.FullName }
 Get-ChildItem -path D:\wsusoffline -exclude *.pdf,*.bat ,*.ps1 -recurse -file -erroraction silentlycontinue | Where-Object {$_.LastWriteTime -lt (Get-Date).AddDays(-30)}  | ForEach-Object { Write-Host sdelete $_.FullName }

}

function menu8 {
    Clear-Host
    Write-Host "  ========================================" -ForegroundColor Gray
    Write-Host "  =                                      =" -ForegroundColor Gray
    Write-Host "  =                                      =" -ForegroundColor Gray
    Write-Host "  =       Menu desarrollado por:         =" -ForegroundColor Gray
    Write-Host "  =         Paulino Bermudez             =" -ForegroundColor Gray
    Write-Host "  =                                      =" -ForegroundColor Gray
    Write-Host "  =                                      =" -ForegroundColor Gray
    Write-Host "  =                                      =" -ForegroundColor Gray
    Write-Host "  ========================================" -ForegroundColor Gray
    Start-Sleep -s 2
    return
}

do {
Clear-Host
Write-Host "                          Menu del Operador                          "
Write-Host "====================================================================="
Write-Host "==                                                                 =="
Write-Host "==                                                                 =="
Write-Host "== 1) Mostrar procesos 					                           =="
Write-Host "== 2) Mostrar adaptador de red y su routing habilitado.            =="
Write-Host "== 3) Configurar servicor como router			                   =="
Write-Host "== 4) Mostrar Warning de sincronicación horaria.	               =="
Write-Host "== 5) Parar Servicios.		                                       =="
Write-Host "== 6) Programar reactivacion de interfaces			               =="
Write-Host "== 7) Borrado seguro de unidades		                           =="
Write-Host "== 8) Salir                                                        =="
Write-Host "==                                                                 =="
Write-Host "==                                                                 =="
Write-Host "====================================================================="
$opt=Read-Host "Introduce una opción ... "
Switch ( $opt ) {
      1 { menu1 }
      2 { menu2 }
      3 { menu3 }
      4 { menu4 }
      5 { menu5 }
      6 { menu6 }
      7 { menu7 }
      8 { menu8 }
default { write-host "Por favor, elige una opcion correcta" -foregroundcolor red }
}
    pause
}
until ( $opt -eq "8" )