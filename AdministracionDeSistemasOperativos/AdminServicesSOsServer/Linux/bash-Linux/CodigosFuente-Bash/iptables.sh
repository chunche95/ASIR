#!/bin/bash

sudo iptables -F
sudo iptables -X
sudo iptables -F -t raw
sudo iptables -X -t raw
sudo iptables -F -t nat
sudo iptables -X -t nat
sudo iptables -F -t mangle
sudo iptables -X -t mangle
sudo iptables -F -t filter
sudo iptables -X -t filter

sudo iptables -P INPUT DROP
sudo iptables -P FORWARD DROP
sudo iptables -P OUTPUT ACCEPT

sudo iptables -t raw -A PREROUTING -m limit --limit 5/min -j LOG --log-prefix "LOG_ALL "

sudo iptables -A INPUT -i lo -j ACCEPT

sudo iptables -A INPUT -m conntrack --ctstate RELATED,ESTABLISHED -j ACCEPT
sudo iptables -A INPUT -m state --state ESTABLISHED,RELATED -j ACCEPT

sudo iptables -A INPUT -m conntrack --ctstate INVALID -j DROP

sudo iptables -A INPUT -p tcp -m tcp --dport 22 -j ACCEPT
sudo iptables -A INPUT -p tcp -m tcp --dport 22 -s 10.2.0.0/16 -j ACCEPT

sudo iptables -A INPUT -p tcp -m tcp --dport 80 -j ACCEPT
sudo iptables -A INPUT -p tcp -m tcp --dport 443 -j ACCEPT

sudo iptables -A INPUT -m limit --limit 5/min -j LOG --log-prefix "LOG_DENY " --log-level 7
sudo iptables -A INPUT -j DROP