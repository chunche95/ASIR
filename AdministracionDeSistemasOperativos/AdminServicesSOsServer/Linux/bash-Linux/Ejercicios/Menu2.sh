#!/bin/bash
    #
    # echo "1) Mostrar distribución, versión de kernel y si existen extensiones de virtualización de la cpu"
    # echo "2) Mostrar cada segundo y 3 veces los 5 procesos con más threads ordenados descendentemente por número de threads"
    # echo "3) Lanza con máxima prioridad tantos programas de stress como vcpus tenga el sistema"
    # echo "4) Informar de si el sistema está utilizando espacio de swap o no"
    # echo "5) Mostrar todo el árbol de procesos del usuario que se solicita"
    # echo "6) Pasar todos los viernes a las 18:30 a nivel de mantenimento/rescate y los lunes a las 8:30 a runlevel gráfico"
    # echo "7) Convertir todos los ficheros .jpg de una carpeta que se pide al usuario a .png informando de lo ocurrido"
    # echo "8) Sacar un listado de los puertos tcp abiertos y qué proceso los tiene"
    # echo "9) Realizar un hash de todos los ficheros contenidos en los subdirectorios de /etc dando a elegir al usuario el algoritmo"
    #
clear
primero()
{
    echo "Distribución:"
    lsb_release -a | grep -i description | awk '{$1=""; print $2}'
    echo ""
    echo "Kernel:"
    uname -mrs
    echo ""
    echo "Virtualización:"
    cat /proc/cpuinfo | grep -i vms
}

segundo()
{
    while (true)
    do
        clear
        ps -eLo cmd,pid,pri,lwp,nlwp --sort=-nlwp | head -6
        sleep 1
    done
}

tercero()
{
    init=1
    procesos=`nproc --all`
    echo "Ejecutando $procesos procesos"
    for i in `seq $init $procesos`
    do
        sha1sum /dev/zero &
    done
}

cuarto()
{
    free | grep Swap | awk '{print $1,$3}'
}

quinto()
{
    read -p "Dime el usuario " usuario
    for i in `cat /etc/passwd | cut -d":" -f1`
    do
        if [ $i = $usuario ]; then
            ps -elfU $usuario
        fi
    done
}

sexto()
{
    echo "Nivel de mantenimiento para los viernes a las 18:30"
    cat /var/spool/cron/crontabs/root | grep "init 2"
    if [ $? -eq 0 ]; then
        echo "Ya estaba programado"
    else
        echo "30 18 * * 5 init 2" >> /var/spool/cron/crontabs/root
        echo "Programado"
    fi

    echo "Nivel de runlevel gráfico para los lunes a las 08:30"
    cat /var/spool/cron/crontabs/root | grep "init 5"
    if [ $? -eq 0 ]; then
        echo "Ya estaba programado"
    else
        echo "Programado"
        echo "30 8 * * 1 init 5" >> /var/spool/cron/crontabs/root
    fi
}

septimo()
{
    read -p "Dime la carpeta: " carpeta
    cd $carpeta
    mogrify -format jpg *.png
}

octavo()
{
    netstat -ltpn | awk '{print $4 OFS OFS OFS OFS OFS OFS OFS OFS $7}'
}

noveno()
{
    echo "Elige el algorítmo para hacer el HASH:"
    echo "1) md5"
    echo "2) sha1"
    echo "3) sha256"
    echo "4) sha512"
    echo ""
    read -p "Respuesta: " sum
    case $sum in
    1) hash=md5sum ;;
    2) hash=sha1sum ;;
    3) hash=sha256sum ;;
    4) hash=sha512sum ;;
    *) echo "Opción incorrecta" ;;
    esac

    for i in `find /etc`
    do
        if [ -f $i ]; then
            $hash $i
            echo ""
        fi
    done
}

while (true)
do
    clear
    echo "MENU OPERADOR"
    echo "================================================================"
    echo "1) Mostrar distribución, versión de kernel y si existen extensiones de virtualización de la cpu"
    echo "2) Mostrar cada segundo y 3 veces los 5 procesos con más threads ordenados descendentemente por número de threads"
    echo "3) Lanza con máxima prioridad tantos programas de stress como vcpus tenga el sistema"
    echo "4) Informar de si el sistema está utilizando espacio de swap o no"
    echo "5) Mostrar todo el árbol de procesos del usuario que se solicita"
    echo "6) Pasar todos los viernes a las 18:30 a nivel de mantenimento/rescate y los lunes a las 8:30 a runlevel gráfico"
    echo "7) Convertir todos los ficheros .jpg de una carpeta que se pide al usuario a .png informando de lo ocurrido"
    echo "8) Sacar un listado de los puertos tcp abiertos y qué proceso los tiene"
    echo "9) Realizar un hash de todos los ficheros contenidos en los subdirectorios de /etc dando a elegir al usuario el algoritmo"
    echo "10) Salir"
    echo "================================================================"
	echo ""
	echo ""

	read -p "Introduce tu opción " resp

	echo ""
	echo ""

	case $resp in
	1) primero ;;
	2) segundo ;;
	3) tercero ;;
	4) cuarto ;;
	5) quinto ;;
	6) sexto ;;
	7) septimo ;;
	8) octavo ;;
	9) noveno ;;
	10) echo "FIN"; break ;;
	*) echo "Opción incorrecta"; sleep 2 ;;
	esac
echo ""
echo "Pulsa una tecla para continuar"
read -n1 nada
echo ""
echo ""
done