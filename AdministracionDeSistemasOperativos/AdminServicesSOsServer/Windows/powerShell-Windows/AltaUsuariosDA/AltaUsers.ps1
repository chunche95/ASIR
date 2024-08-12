cls
Get-Content("Usuarios.csv") |
ForEach-Object{
 $Datos= $_.split(",");
 $Nombre= $Datos[2];
 $Apellido= $Datos[0];
 $UPN= $Datos[4];
 
 dsadd user "cn=$Nombre $Apellido,ou=Usuarios,dc=asir,dc=inet" -pwd P@ssw0rd -upn $UPN@asir.inet -fn $Nombre -ln $Apellido;
} 
