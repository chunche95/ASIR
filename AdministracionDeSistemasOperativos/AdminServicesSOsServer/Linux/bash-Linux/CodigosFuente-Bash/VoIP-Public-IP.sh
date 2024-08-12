#!/bin/bash

#Resolve the public IP address
myip="$(dig +short myip.opendns.com @resolver1.opendns.com)"

#Make WAN ip as Sip Nat Parameter
ReplacedString="externip="$myip

#Pull the SIP NAT ip address
SipNatIP=$(cat /etc/asterisk/sip_nat.conf | grep externip | grep -E -o "([0-9]{1,3}[\.]){3}[0-9]{1,3}")

#Print on the Screen the SIP NAT ip address
echo "Your SIP NAT ip is : $SipNatIP"

#Print on the screen the WAN ip address
echo "Your WAN/Public ip address: ${myip}"

#Compares between the WAN and SIP NAT ip address && changes the externip if necessary

if [ "$myip" != "$SipNatIP" ]
then
        echo "The SIP NAT ip && WAN ip are not equal ! \n Making now the change"
        sed -i '/externip/d'  /etc/asterisk/sip_nat.conf
        sed -i "\$i $ReplacedString"   /etc/asterisk/sip_nat.conf
        asterisk -rx "sip reload"

else
        echo "The SIP NAT ip && WAN ip are equal \n No changes need"
fi


SipNatIPChecker=$(cat /etc/asterisk/sip_nat.conf | grep externip | grep -E -o "([0-9]{1,3}[\.]){3}[0-9]{1,3}")

#Checks if the change made sucessfully
if [ "$myip" != "$SipNatIPChecker" ]
then
        echo "Unsuccessful change"

else
        echo "Successfully changed"
fi

exit
