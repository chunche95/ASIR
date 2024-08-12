#Menu examen muestra
function menu1 {

}

function menu2 {

}

function menu3 {

}

function menu4 {

}

function menu5 {

}

function menu6 {

}

function menu7 {

}

function menu8 {

}

function menu9 {

}

function menus {
    Clear-Host
    Write-Host "  ========================================" -ForegroundColor Grey
    Write-Host "  =                                      =" -ForegroundColor Grey
    Write-Host "  =                                      =" -ForegroundColor Grey
    Write-Host "  =       Menu desarrollado por:         =" -ForegroundColor Grey
    Write-Host "  =           Paulino Bermudez           =" -ForegroundColor Grey
    Write-Host "  =                                      =" -ForegroundColor Grey
    Write-Host "  =                                      =" -ForegroundColor Grey
    Write-Host "  =                                      =" -ForegroundColor Grey
    Write-Host "  ========================================" -ForegroundColor Grey
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
Write-Host "== 6) Sacar los 5 eventos de error mas de aplicacion mas recientes =="
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