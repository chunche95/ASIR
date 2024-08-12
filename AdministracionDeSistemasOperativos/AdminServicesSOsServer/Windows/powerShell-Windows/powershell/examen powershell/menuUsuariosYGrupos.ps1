   #Listado de opciones
do{
$Seleccion=Read-Host ‘Seleccione la tarea a realizar:
 
1-Listado de usuarios
2-Creacion de usuarios.
3-Creacion de usuarios con csv.
4-Listado de grupos.
5-Creacion de grupos.
6-Agregar usuarios a grupos.
 
Dejar en blanco para Salir
 
Su seleccion es’
    #ejecucion de la seleccion.

if ($Seleccion -eq “1”)
    #Listado de usuarios
    {
cls
Codigo del script de la opcion 1
   }
elseif ($Seleccion -eq “2”)
 
    #Creacion de usuarios
}
cls
Codigo del script de la opcion 2
    }
else
    {
    Remove-Variable * -ErrorAction SilentlyContinue
    cls
    Exit-PSSession
    Exit
    }
