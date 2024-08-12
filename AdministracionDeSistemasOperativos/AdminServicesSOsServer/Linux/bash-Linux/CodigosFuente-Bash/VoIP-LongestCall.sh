#!/bin/bash


long=$(sudo -u asterisk /usr/sbin/asterisk -rx'show channels verbose' |grep -v "from-call" \
     | grep -o "..:..:.." | sort -n | tail -1)

hours=$(echo "$long" | awk -F":" '{print$1}')
mins=$(echo "$long" | awk -F":" '{print$2}')
secs=$(echo "$long" | awk -F":" '{print$3}')

hours2secs=$((10#$hours*3600))
mins2secs=$((10#$mins*60))
total_secs=$((10#$hours2secs+10#$mins2secs+10#$secs))

echo $total_secs

#LongestCall=( "$total_secs" / 3600 )
LongestCall=$((total_secs / 3600))

if  (( "$LongestCall" > 2 ))
then
        echo "We must hangup"
fi

#Context=$( asterisk -rx "show channels verbose" | grep "$long" | awk '{print $1}')
Context=$( sudo -u asterisk /usr/sbin/asterisk -rx'show channels verbose' | grep -w "$LongestCall" | awk '{print $1}')

asterisk -rx "soft hangup $Context"
echo $Context