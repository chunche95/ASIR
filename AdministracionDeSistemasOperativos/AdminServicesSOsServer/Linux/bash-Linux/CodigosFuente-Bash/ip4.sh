#!/bin/bash

# Show logs file
sudo tail -f /var/log/messages
sudo tail -f /var/log/kern.log
show iptables
# sudo iptables -t raw -L -v
## Edit file
clear
echo "/etc/sysctl.conf"
sleep 5
## Mods
modprobe ipt_LOG
echo "2048" > /proc/sys/net/ipv4/tcp_max_syn_backlog
echo "2" > /proc/sys/net/ipv4/tcp_synack_retries
echo "0" > /proc/sys/net/ipv4/ip_forward
echo "1" > /proc/sys/net/ipv4/icmp_echo_ignore_all
echo "1" > /proc/sys/net/ipv4/icmp_echo_ignore_broadcasts
echo "1" > /proc/sys/net/ipv4/icmp_ignore_bogus_error_responses
echo "1" > /proc/sys/net/ipv4/tcp_rfc1337
echo "1" > /proc/sys/net/ipv4/tcp_syncookies
echo "0" > /proc/sys/net/ipv4/conf/all/accept_source_route
echo "0" > /proc/sys/net/ipv4/conf/all/accept_redirects
echo "0" > /proc/sys/net/ipv4/conf/all/send_redirects
echo "1" > /proc/sys/net/ipv4/conf/all/log_martians
echo "1" > /proc/sys/net/ipv4/conf/all/rp_filter
echo "1" > /proc/sys/net/ipv4/conf/all/secure_redirects
# DLA router
# echo "1" > /proc/sys/net/ipv4/eth0/proxy_arp
# echo "1" > /proc/sys/net/ipv4/eth1/proxy_arp

## Clear
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

## Policy
sudo iptables -t raw -P PREROUTING ACCEPT
sudo iptables -t raw -P OUTPUT ACCEPT
sudo iptables -t nat -P PREROUTING ACCEPT
sudo iptables -t nat -P POSTROUTING ACCEPT
sudo iptables -t nat -P OUTPUT ACCEPT
sudo iptables -t mangle -P PREROUTING ACCEPT
sudo iptables -t mangle -P POSTROUTING ACCEPT
sudo iptables -t mangle -P FORWARD ACCEPT
sudo iptables -t mangle -P INPUT ACCEPT
sudo iptables -t mangle -P OUTPUT ACCEPT
sudo iptables -P INPUT DROP
sudo iptables -P FORWARD DROP
sudo iptables -P OUTPUT ACCEPT

## RAW
# sudo iptables -t raw -A PREROUTING -j TRACE
# sudo iptables -t raw -A OUTPUT -j TRACE
# sudo iptables -t raw -A PREROUTING -i wlp4s0 -j TRACE
# sudo iptables -t raw -A OUTPUT -i wlp4s0 -j TRACE
# sudo iptables -t raw -A PREROUTING -j NOTRACK
# Drop syf
sudo iptables -t raw -A PREROUTING -p icmp -m u32 ! --u32 "0x4&0x3fff=0x0" -j DROP
sudo iptables -t raw -A PREROUTING -p icmp -m length --length 1492:65535 -j DROP
sudo iptables -t raw -A PREROUTING -p tcp -m tcp --tcp-flags FIN,SYN FIN,SYN -j DROP
sudo iptables -t raw -A PREROUTING -p tcp -m tcp --tcp-flags SYN,RST SYN,RST -j DROP
sudo iptables -t raw -A PREROUTING -p tcp -m tcp --tcp-flags FIN,SYN,RST,PSH,ACK,URG FIN,PSH,URG -j DROP
sudo iptables -t raw -A PREROUTING -p tcp -m tcp --tcp-flags FIN,SYN,RST,PSH,ACK,URG FIN -j DROP
sudo iptables -t raw -A PREROUTING -p tcp -m tcp --tcp-flags FIN,SYN,RST,PSH,ACK,URG NONE -j DROP
sudo iptables -t raw -A PREROUTING -p tcp -m tcp --tcp-flags FIN,SYN,RST,PSH,ACK,URG FIN,SYN,RST,PSH,ACK,URG -j DROP
# Log all
sudo iptables -t raw -A PREROUTING -m limit --limit 5/min -j LOG --log-prefix "LOG_ALL "
sudo iptables -t raw -A PREROUTING -m limit --limit 5/s --limit-burst 10 -j LOG --log-prefix "LOG_ALL " --log-level 4
sudo iptables -t raw -A PREROUTING -m limit --limit 5/min -j LOG --log-prefix "LOG_PRE " --log-level 4


## INPUT
# Drop invalid
sudo iptables -A INPUT -m conntrack --ctstate INVALID -j DROP

# Vps services
sudo iptables -A INPUT -p tcp -m tcp --dport 22 -s 172.16.0.0/16 -m limit --limit 5/min -j LOG --log-prefix "INP_SSH " --log-level 4
sudo iptables -A INPUT -p tcp -m tcp --dport 22 -s 172.16.0.0/16 -j ACCEPT
sudo iptables -A INPUT -m multiport -p udp --dports 80,443 -m limit --limit 5/min -j LOG --log-prefix "INP_WWW "
sudo iptables -A INPUT -m multiport -p udp --dports 80,443 -j ACCEPT

# Established connections
sudo iptables -A INPUT -m state --state ESTABLISHED,RELATED -m limit --limit 1/s --limit-burst 10 -j LOG --log-prefix "LOG_INP "
sudo iptables -A INPUT -m state --state ESTABLISHED,RELATED -j ACCEPT
# Localhost
sudo iptables -A INPUT -i lo -j ACCEPT

# Odrzucamy ident
sudo iptables -A INPUT -p tcp --dport 113 -j REJECT --reject-with icmp-port-unreachable

# Disale pings
# sudo iptables -A INPUT -p icmp --icmp-type echo-request -j REJECT --reject-with icmp-host-unreachable

# Ochrona przed atakami
sudo iptables -A INPUT -p icmp --icmp-type echo-request -m limit --limit 1/s -j LOG --log-prefix "Ping: "
sudo iptables -A INPUT -p icmp --icmp-type echo-request -m limit --limit 1/s -j ACCEPT # Ping of death

# Scans
sudo iptables -A INPUT -m conntrack --ctstate NEW -p tcp --tcp-flags SYN,RST,ACK,FIN,URG,PSH ACK -j LOG --log-prefix "ACK scan: "
sudo iptables -A INPUT -m conntrack --ctstate NEW -p tcp --tcp-flags SYN,RST,ACK,FIN,URG,PSH ACK -j DROP # Metoda ACK (nmap -sA)

sudo iptables -A INPUT -m conntrack --ctstate NEW -p tcp --tcp-flags SYN,RST,ACK,FIN,URG,PSH FIN -j LOG --log-prefix "FIN scan: "
sudo iptables -A INPUT -m conntrack --ctstate NEW -p tcp --tcp-flags SYN,RST,ACK,FIN,URG,PSH FIN -j DROP # Skanowanie FIN (nmap -sF)

sudo iptables -A INPUT -m conntrack --ctstate NEW -p tcp --tcp-flags SYN,RST,ACK,FIN,URG,PSH PSH -j LOG --log-prefix "Xmas scan: "
sudo iptables -A INPUT -m conntrack --ctstate NEW -p tcp --tcp-flags SYN,RST,ACK,FIN,URG,PSH FIN,URG,PSH -j DROP # Metoda Xmas Tree (nmap -sX)

sudo iptables -A INPUT -m conntrack --ctstate INVALID -p tcp ! --tcp-flags SYN,RST,ACK,FIN,PSH,URG SYN,RST,ACK,FIN,PSH,URG -j LOG --log-prefix "Null scan: "
sudo iptables -A INPUT -m conntrack --ctstate INVALID -p tcp ! --tcp-flags SYN,RST,ACK,FIN,PSH,URG SYN,RST,ACK,FIN,PSH,URG -j DROP # Skanowanie Null (nmap -sN)

# Łańcuch syn-flood (obrona przed DoS)
sudo iptables -N syn-flood
sudo iptables -A INPUT -p tcp --syn -j syn-flood
sudo iptables -A syn-flood -m limit --limit 1/s --limit-burst 4 -j RETURN
sudo iptables -A syn-flood -m limit --limit 1/s --limit-burst 4 -j LOG --log-prefix "SYN-flood: "
sudo iptables -A syn-flood -j DROP

# Logs and drop
sudo iptables -A INPUT -j LOG --log-prefix "INP_DROP "
sudo iptables -A INPUT -j DROP


### OUTPUT
# Pings
sudo iptables -A OUTPUT -p icmp --icmp-type echo-reply -j DROP


### https://nfsec.pl/security/61
### http://jazz.tvtom.pl/iptables-prosty-skuteczny-firewall/
### http://www.physd.amu.edu.pl/~m_jurga/pld/firewall/
### https://morfikov.github.io/post/firewall-na-linuxowe-maszyny-klienckie/
### https://forum.dug.net.pl/viewtopic.php?id=30503
### https://www.theurbanpenguin.com/rp_filter-and-lpic-3-linux-security/