# Ej_18.12.ps1
# 18.12. Eliminar el grupo “Servicios”
#
$grupo = "Servicios"

$conexion = [ADSI]"WinNT://."
$conexion.Delete('group',$grupo)

"Grupo $grupo eliminado correctamente"