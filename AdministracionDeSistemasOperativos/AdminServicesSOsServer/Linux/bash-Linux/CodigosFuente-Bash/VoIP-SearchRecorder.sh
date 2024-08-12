#!/bin/sh
echo "What is the Phone Number?"
read number
echo "What is the Date of the Call?"
read date
echo "Let me search for that call"
uid=$(mysql -D asteriskcdrdb -e "SELECT distinct(uniqueid) FROM \`cdr\` WHERE (\`src\` LIKE \"$number\" OR \`dst\` LIKE \"$number\") AND \`calldate\` >= '$date 00:00:00';")

test=$(echo $uid | awk '{print $2}')

echo $test

rec=$(find /var/spool/asterisk/monitor/ | grep $test)

printf '%s\n' $rec

cp $rec /tmp/

echo "This is Done"
