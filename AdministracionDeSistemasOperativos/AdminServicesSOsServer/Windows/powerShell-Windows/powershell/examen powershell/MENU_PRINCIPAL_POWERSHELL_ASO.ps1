# Menu PowerShell de Administracion de Sistemas Operativos.

do {

    clear-host

    Write-Host "---------------------"
    Write-Host "Menú de Operaciones."
    Write-Host "---------------------"
    Write-Host "1. Muestra de procesos."
    Write-Host "2. Muestra de memoria fisica instalada."
    Write-Host "3. Muestra version de PowerShell."
    Write-Host "4. Muestra de configuracion IP."
    Write-Host "5. "
    Write-Host ""
    Write-Host ""
    Write-Host "S. Salir del menú."
    Write-Host "---------------------"
    
    $numero=Read-Host "Seleccione una de las opciones del menú."

    Switch ( $numero)
    {
       '1' {
           clear-host
            Write-Host "Estos son los procesos en ejecución:"
            Write-Host "************************************"
            Write-Host ""
            Get-Process | Select-Object ProcessName | Out-Host -Paging
            }
        '2'
            {
            Write-Host "Esta es la cantidad de memoria instalada :"
            Write-Host "******************************************"
            Write-Host ""
            Get-WmiObject -Class Win32_ComputerSystem | select-object TotalPhysicalMemory | Write-Host
            }
        '3'
           {
            Write-Host "Esta es la version de Power Shell instalada :"
            Write-Host "*********************************************"
            Write-Host ""
            Get-Host | Select-Object Version | Out-Host
            } 
        '4'
            {
            Write-Host "Esta es la configuración de red del sistema :"
            Write-Host "*********************************************"
            Write-Host ""
            IPCONFIG
            }
        '5'

        's'
            {
            Write-Host "******************************************"
            Write-Host "        FIN DEL PROGRAMA."
            Write-Host "******************************************"
            BREAK
            }
        'S'
            {
            Write-Host "******************************************"
            Write-Host "        FIN DEL PROGRAMA."
            Write-Host "******************************************"
            BREAK
            }
        default 
        {
            Write-Host "ERROR! Opcion incorrecta."
            Write-Host "Por favor, elija una de las opciones correctas" -foregroundcolor red
        }
        pause
    }

}
until ( $numero -eq 5)