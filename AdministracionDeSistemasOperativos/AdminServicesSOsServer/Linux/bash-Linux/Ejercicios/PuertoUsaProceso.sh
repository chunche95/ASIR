#!/bin/bash

# Forma 1: Buscando puerto 22, como ejemplo

netstat -punlt | grep ':22'
sleep 5
clear

# Forma 2: Buscando puerto 22, como ejemplo
lsof -i:22
sleep 5
clear
