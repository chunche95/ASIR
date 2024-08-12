#Menu examen muestra
function menu1 {
    Clear-Host
    Write-Host "Se va a mostrar una lista con los servicios en ejecucion"
    Start-Sleep -s 2
    Get-Service | Where-Object {$_.Status -eq "Running"} |Format-Wide| Out-Host -paging
    $servicio=Read-Host "Elige un servicio para detener: "
    Stop-Service $servicio
}

function menu2 {
    $contador=0    
    while ( $contador -ne 10 ) {
        Get-Process | Where-Object {$_.VirtualMemorySize} | Select-Object VirtualMemorySize, ProcessName | Sort-Object VirtualMemorySize
        Start-Sleep -s 2
        $contador=$contador+1
    }
}

function menu3 {
    Clear-Host
    get-process -Name s* | Sort-Object -Descending pm
}

function menu4 {
    Clear-Host
    Get-EventLog -LogName Application -EntryType Error -Newest 5
}

function menu5 {
    Clear-Host
    $ruta=Read-Host "Introduce una ruta: "
    Get-ChildItem -Path $ruta |Sort-Object -Descending length
}

function menu6 {
    Clear-Host
    $puerto=Read-Host "Introduce puerto: "
    Set-ItemProperty -Path 'HKLM:\SYSTEM\CurrentControlSet\Control\Terminal Server\WinStations\RDP-Tcp' -Name PortNumber -Value $puerto
}

function menu7 {
    Clear-Host
    Get-ItemProperty -Path 'HKLM:\SYSTEM\CurrentControlSet\Control\Terminal Server\WinStations\RDP-Tcp' -Name PortNumber
}

function menu8 {
    Get-Process |Sort-Object -Descending -Property PriorityClass | Format-Table Name,CPU,PriorityClass
}

function menu9 {
    $trigger=New-JobTrigger -Weekly -DaysOfWeek Friday -at 17:00
    Register-ScheduledJob -name Diagnostico -ScriptBlock {sfc /scannow} -Trigger $trigger
}

function menus {
    Clear-Host
    Write-Host "  ========================================" -ForegroundColor Green
    Write-Host "  =                                      =" -ForegroundColor Green
    Write-Host "  =                                      =" -ForegroundColor Green
    Write-Host "  =       Menu desarrollado por:         =" -ForegroundColor Green
    Write-Host "  =            J. Frontelo               =" -ForegroundColor Green
    Write-Host "  =                                      =" -ForegroundColor Green
    Write-Host "  =                                      =" -ForegroundColor Green
    Write-Host "  =                                      =" -ForegroundColor Green
    Write-Host "  ========================================" -ForegroundColor Green
    Start-Sleep -s 2
    return
}

do {
Clear-Host
Write-Host "                          Menu del Operador                          "
Write-Host "====================================================================="
Write-Host "==                                                                 =="
Write-Host "==                                                                 =="
Write-Host "== 1) Parar servicio cuyo nombre se solicita al usuario            =="
Write-Host "== 2) Ver la memoria virtual ocupada 10 veces cada 2 segundos      =="
Write-Host "== 3) Mostrar procesos cuyo nombre comienza por s ordenados        =="
Write-Host "==    inversamente por memoria fisica utilizada                    =="
Write-Host "== 4) Sacar los 5 eventos de error del registro de aplicacion más  =="
Write-Host "==    recientes.                                                   =="
Write-Host "== 5) Mostrar todos los ficheros con su tamaño de la carpeta que   =="
Write-Host "==    se solicata al usuario ordenados inversamente por el tamaño. =="
Write-Host "== 6) Cambiar puerto TCP escritorio remoto a valor solicitado al   =="
Write-Host "==    usuario.                                                     =="
Write-Host "== 7) Mostrar valor puerto TCP escritorio remoto (por defecto es   =="
Write-Host "==    3389)                                                        =="
Write-Host "== 8) Listar procesos con su nombre,cpu y prioridad ordenado       =="
Write-Host "==    descendentemente por ésta última                             =="
Write-Host "== 9) Programar que los viernes a las 17:00 se realice un          =="
Write-Host "==    diagnostico de integridad de filesystem (comando sfc)        =="
Write-Host "== S) Salir                                                        =="
Write-Host "==                                                                 =="
Write-Host "==                                                                 =="
Write-Host "====================================================================="
$opt=Read-Host "Elige una opción: "
Switch ( $opt ) {
      1 { menu1 }
      2 { menu2 }
      3 { menu3 }
      4 { menu4 }
      5 { menu5 }
      6 { menu6 }
      7 { menu7 }
      8 { menu8 }
      9 { menu9 }
      S { menus }
default { write-host "Por favor, elige una opcion correcta" -foregroundcolor red }
}
    pause
}
until ( $opt -eq "S" )