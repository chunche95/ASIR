#!/bin/bash

# Show logs file
sudo tail -f /var/log/messages
sudo tail -f /var/log/kern.log
# Show ip6tables
sudo ip6tables -t raw -L -v
sudo ip6tables -L -v
read -p "Enter to continue." michi
clear
sudo ip6tables -F
sudo ip6tables -X
sudo ip6tables -F -t raw
sudo ip6tables -X -t raw
sudo ip6tables -F -t nat
sudo ip6tables -X -t nat
sudo ip6tables -F -t mangle
sudo ip6tables -X -t mangle
sudo ip6tables -F -t filter
sudo ip6tables -X -t filter

## Drop all
sudo ip6tables -t raw -P PREROUTING DROP
sudo ip6tables -t raw -P OUTPUT DROP
sudo ip6tables -P INPUT DROP
sudo ip6tables -P FORWARD DROP
sudo ip6tables -P OUTPUT DROP

# Log all
sudo ip6tables -t raw -A PREROUTING -m limit --limit 5/min -j LOG --log-prefix "IP6_LOG_ALL "