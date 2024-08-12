#!/bin/bash

## Install
sudo apt install ufw -y

# Enable logs
ufw logging on

# Ssh all ips
sudo ufw allow 22/tcp

# Ssh ip mask
sudo ufw allow from 10.2.0.0/16 to any port 22 proto tcp

# Allow http, https
sudo ufw allow 80/tcp
sudo ufw allow 443/tcp

# Default policy
sudo ufw default deny incoming
sudo ufw default allow outgoing

# Start firewall on restart
sudo ufw enable