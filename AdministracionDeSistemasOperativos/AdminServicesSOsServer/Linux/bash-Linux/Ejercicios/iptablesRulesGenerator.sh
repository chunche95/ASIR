#!/bin/bash

# @Title: Iptables-rule-generator
# @Description: Generador básico de reglas de IPTables por puerto, interface, dirección IP o segmento
# para colocar en el archivo generado por el comando iptables-save.
# 
# @Author: Pauchino09.


if [ $# -lt 1 ]; then 
    echo "Usage: $0 [Option] "
    echo "Option are: "
    echo "By port: "
    echo "By Interface: "
    echo "By Address (Full Access): "
    echo "By Segment: "
    exit 1
fi

NUM='^[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}$' 
NUM2='^-?[0-9]+$'

case "$1" in 
    P)
        echo "Give me the IP: "
        read IP 
        if ! [[ $IP =~ $NUM ]]; then 
            echo "Please use numeric values. "
            exit 1
        fi 
        echo "Give me the port: "
        read PORT 
        if ! [[ $PORT =~ $NUM2 ]]; then 
            echo "Please use numeric values. "
            exit 1
        fi 
    echo "Generating rules... Please append it in the config file /etc/iptables.rules.date"
    sleep 2
    echo "-A input -s $IP/32 -p tcp -m tcp  --dport $PORT -j ACCEPT "
    echo "-A output -d $IP/32 -p tcp -m tcp --sport $PORT -j ACCEPT "
    ;;

    I)
        echo "Give me the Interface: "
        read INTER 
        echo "Give me the IP: "
        read IP 
        if ! [[ $IP=~$NUM ]]; then 
            echo "Please use numeric values."
            exit 1
        fi 
    echo "Generic rules...Please append it in the config file /etc/iptables.rules.date"
    sleep 2 
    echo "-A input -i $INTER -p tcp -s $IP/32 -j ACCEPT "
    echo "-A output -o $INTER -p tcp -d $IP/32 -j ACCEPT "
    ;;

    A)
        echo "Give me the IP: "
        read  IP 
        if ! [[ $IP =~ $NUM ]]; then
            echo "Please use numeric values"
            exit 1
        fi
    echo "Generic rules...Please append it in the config /etc/iptables.rules.date"
    sleep 2
    echo "-A input -s $IP -j ACCEPT "
    echo "-A input -d $IP -j ACCEPT "
    ;; 
    
    S)
        echo "Give me the IP: "
        read IP 
        if ! [[ $IP=~ $NUM ]]; then 
            echo "Please use numeric values"
            exit 1
        fi 
        echo "Give me the interface: "
        read INTER 
    echo "Generic rules...Please append it in the config file /etc/iptables.rules.date"
    sleep 2
    echo "-A input -i $INTER -s $IP/24 -j ACCEPT "
    echo "-A output -i $INTER -s $IP/24 -j ACCEPT "
    ;;

    *)
        echo "Invalid option"
        echo "Usage: $0 [ OPTION ] "
            echo "Option are:"
            echo "by Port" 
        echo "by Interface" 
        echo "by Address" 
        echo "by Segment" 
        exit 1 
;; 
esac 

