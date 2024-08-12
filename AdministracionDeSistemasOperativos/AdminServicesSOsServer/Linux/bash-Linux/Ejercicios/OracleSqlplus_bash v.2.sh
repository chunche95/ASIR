#!/bin/bash

# Download Oracle SQLPlus

read -p "Path to Oracle SQLPlus directory: " pOracle
read -p "Username: " user
read -p "Password: " pass
read -p "Oracle database server(IP): " ip
read -p "Port: " port
read -p "Service name: " service

export ORACLE_HOME=$pOracle
export LD_LIBRARY_PATH=$ORACLE_HOME/lib
export PATH=$PATH:$ORACLE_HOME/bin

USER=$user
PASSWORD=$pass
HOST=$ip
PORT=$port
SERVICE=$service

sqlplus -s /nolog <<EOF
CONNECT $USER/$PASSWORD@$HOST:$PORT/$SERVICE;
### PLACE FOR YOUR SQL CODE; ###
EOF