# Ej_1.5.ps1
# Calcular el factorial de un número

[double]$a = Read-Host
[double]$fact = 1

for ($i = 1; $i -le $a; $i++){
    $fact *= $i
}

"El factorial de $a es $fact"