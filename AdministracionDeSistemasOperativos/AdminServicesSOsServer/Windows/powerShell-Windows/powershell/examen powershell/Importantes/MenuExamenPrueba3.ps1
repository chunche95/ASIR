#Menu examen muestra
function menu1 {
    Clear-Host
    Get-Process | sort-object -descending -property workingset64 | format-table -property Sessionid,path,threads,workingset64
}

function menu2 {
    Clear-Host
    while ( $true ) {
        query session
        Start-Sl
    }
}

function menu3 {
    Clear-Host
    #Este es el Enable
    $trigger=New-JobTrigger -daily -At 8:00
    Register-ScheduledJob -Name EnableFirewall -ScriptBlock {Set-NetFirewallProfile -Profile Domain,Public,Private -Enabled True} -Trigger $trigger
    #Este es el Disable
    $trigger2=New-JobTrigger -daily -At 18:30
    Register-ScheduledJob -Name DisableFirewall -ScriptBlock {Set-NetFirewallProfile -Profile Domain,Public,Private-Enabled false} -Trigger $trigger2
}

function menu4 {
    Clear-Host
    $ruta=Read-Host "Indica la ruta de la carpeta: "
    $tamano=Read-Host "Indica el tamaño: "
    Get-ChildItem -recurse $ruta |Where-Object {$_.length -gt $tamanoKB} | Format-Table -Property name,length
}

function menu5 {
    Clear-Host
    #Cambiamos el Servidor
    Set-ItemProperty -Path HKLM:\SYSTEM\CurrentControlSet\services\W32Time\Parameters -Name NtpServer -Value "192.168.131.254,0x1"
    Get-ItemProperty HKLM:\SYSTEM\CurrentControlSet\Services\W32Time\Parameters -name NtpServer | Select-Object NtpServer
    #Cambiamos el intervalo
    Set-ItemProperty -Path HKLM:\SYSTEM\CurrentControlSet\services\W32Time\TimeProviders\NtpClient\ -Name SpecialPollInterval -Value 1800
    Get-ItemProperty HKLM:\SYSTEM\CurrentControlSet\Services\W32Time\TimeProviders\NtpClient -name SpecialPollInterval | Select-Object SpecialPollInterval 
}

function menu6 {
    Clear-Host
    Get-EventLog -LogName Application -EntryType Error -Newest 5
}

function menu7 {
    Clear-Host
    Get-NetFirewallProfile | format-table
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
Write-Host "== 1) Mostrar todos los procesos del sistema, su ID de sesion de   =="
Write-Host "==    usuario, el path de su ejecutable, los threads y el espacio  =="
Write-Host "==    de memoria de 64bits ordenados descendentemente por este     =="
Write-Host "==    ultimo.                                                      =="
Write-Host "== 2) Mostrar sesiones de usuario cada 3 segundos.                 =="
Write-Host "== 3) Programar que se habilite el firewall todos los dias a las   =="
Write-Host "==    8:00 y se deshabilite a las 18:30                            =="
Write-Host "== 4) Buscar ficheros grandes en directorio                        =="
Write-Host "== 5) Cambiar servidor ntp e intervalo                             =="
Write-Host "== 6) Sacar los 5 eventos de error de aplicacion mas recientes     =="
Write-Host "== 7) Comprobar el estado del firewall de Windows                  =="
Write-Host "== 8) Salir                                                        =="
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
      8 { menus }
default { write-host "Por favor, elige una opcion correcta" -foregroundcolor red }
}
    pause
}
until ( $opt -eq "S" )