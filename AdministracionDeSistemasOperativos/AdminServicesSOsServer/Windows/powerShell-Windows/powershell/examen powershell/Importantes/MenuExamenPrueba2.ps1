#Menu examen muestra
function menu1 {
    Clear-Host
    Write-Host "Se va a mostrar una lista con los procesos en ejecucion" -foregroundcolor Green
    Start-Sleep -s 1
    Get-Process | Format-Wide| Out-Host -paging
    $proceso=Read-Host "Elige un proceso para matar: " 
    Stop-Service $proceso
}

function menu2 {
    Clear-Host
    while ( $contador -ne 3 ) {
        Get-Counter -Counter "\Procesador(_Total)\% de tiempo de procesador"
        $contador=$contador+1
        sleep -s 2
    }
}

function menu3 {
    Clear-Host
    New-ItemProperty -Path HKLM:\SOFTWARE\Microsoft\Windows\CurrentVersion\policies\Explorer -Name NoDriveTypeAutoRun -Value 0xff
}

function menu4 {
    Clear-Host
    Get-ItemProperty -Path HKLM:\SOFTWARE\Microsoft\Windows\CurrentVersion\policies\Explorer -Name NoDriveTypeAutoRun

}

function menu5 {
    Write-Host "Buscando ficheros en directorio" -foregroundcolor Green
    $directorio= Read-Host "Introduzca un directorio" 
    $tamano= Read-Host "Introduzca un tamaño mínimo en KB"
    Get-ChildItem -Path $directorio -Recurse | Where-Object {$_.length/1KB -gt $tamano}
}

function menu6 {
    Clear-Host
    Disable-WindowsOptionalFeature -Online -FeatureName smb1protocol
}

function menu7 {
    Clear-Host
    Write-Host ""
    Write-Host "Si no has reiniciado tras la opcion 6, es posible que de un falso positivo."
    write-host ""
    Write-Host "Por lo que vamos a ver tambien si hay una desinstalación pendiente."
    Get-WindowsFeature FS-SMB1
    Write-Host "Ahora vamos a ver el estado del protocolo."
    write-host ""
    Get-SmbServerConfiguration | Select-Object EnableSMB1Protocol
}

function menu8 {
    Clear-Host
    Get-Process | Where-Object {$_.VirtualMemorySize -gt 30000000} | Select-Object VirtualMemorySize, ProcessName | Sort-Object VirtualMemorySize -Descending | out-host -paging
}

function menu9 {
    Clear-Host
    $action=New-ScheduledTaskAction -Execute "Write-VolumeCache C"
    $trigger=New-ScheduledTaskTrigger -Daily -At 7pm
    Register-ScheduledTask -Action $action -Trigger $trigger -TaskName "FlushCache" -Description "Sincroniza la cache de la unidad C diariamente a las 7pm"
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
Write-Host "                          Menu del Operador                             " -foregroundcolor yellow
Write-Host "========================================================================"
Write-Host "==                                                                    =="
Write-Host "==                                                                    =="
Write-Host "== 1) Matar todos los procesos cuyo nombre se solicita al usuario     =="
Write-Host "== 2) Ver % de tiempo de procesador 3 veces cada 2 segundos.          =="
Write-Host "== 3) Desactivar Autorun                                              =="
Write-Host "== 4) Comprobar Autorun                                               =="
Write-Host "== 5) Buscar ficheros grandes en un directorio                        =="
Write-Host "== 6) Deshabilitar SMBV1 (Para prevenir WannaCry)                     =="
Write-Host "== 7) Comprobar si SMBV1 está habilitado                             =="
Write-Host "== 8) Listar procesos que consuman más de 30MB de memoria virtual    =="
Write-Host "==    ordenados descendentemente por ésta                            =="
Write-Host "== 9) Programar que diariamente se guarde (flush) la caché de la     =="
Write-Host "==    unidad c: a las 19:00                                           =="
Write-Host "== S) Salir                                                           =="
Write-Host "==                                                                    =="
Write-Host "==                                                                    =="
Write-Host "========================================================================"
$opt=Read-Host "Elige una opcion: "
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