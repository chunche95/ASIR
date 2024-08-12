#!/bin/bash
#
# Variables
COMA=","
NUMERO_INICIAL=5
NUMERO_FINAL=3000
CADENA="product"

function generarFila(){
	for((i=$NUMERO_INICIAL;i<=NUMERO_FINAL;i+=1)); do
		PRECIO=$((RANDOM%3000))
		SUFIJO=$((RANDOM%15000))
		echo $i$COMA$CADENA$SUFIJO$COMA$PRECIO >> file.txt
	done
}
generarFila
