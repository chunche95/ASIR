#!/bin/bash

#########

#Sip Latency Script
#The script will check your server latency ,packet drops and sip packets jitter/delta for quality tests
#The script was written by $usr Usatchev

#########



#Checking module up

function Modules(){

app=$(asterisk -rx "module show like app_addon_sql_mysql.so" | awk '{print $1}' | tail -2 | head -n 1)
cdr=$(asterisk -rx "module show like cdr_addon_mysql.so" | awk '{print $1}' | tail -2 | head -n 1)
res=$(asterisk -rx "module show like res_config_mysql.so" | awk '{print $1}' | tail -2 | head -n 1)

if [ "$app" = "app_addon_sql_mysql.so" ]
then
	echo -e "app_addon_sql_mysql.so module is \e[32mup\e[0m"
else
	echo -e "app_addon_sql_mysql.so module is \e[31mDOWN !!!\e[0m"
	asterisk -rx "module load app_addon_sql_mysql.so"
fi

if [ "$cdr" = "cdr_addon_mysql.so" ]
then
        echo -e "cdr_addon_mysql.so module is \e[32mup\e[0m"
else
        echo -e "cdr_addon_mysql.so module is \e[31mDOWN !!!\e[0m"
	asterisk -rx "module load cdr_addon_mysql.so"
fi

if [ "$res" = "res_config_mysql.so" ]
then
        echo -e "res_config_mysql.so module is \e[32uup\e[0m"
else
	echo -e "res_config_mysql.so module is \e[31mDOWN !!!\e[0m"
	asterisk -rx "module load res_config_mysql.so"
fi

}

    

#Sip latency : Jitter,Delta,PacketLoss

function SipLatency(){

echo '    Src IP addr  Port    Dest IP addr  Port       SSRC          Payload  Pkts         Lost   Max Delta(ms)  Max Jitter(ms) Mean Jitter(ms) Problems?'; tshark -c 50000 -dudp.port==5060,rtp -z rtp,streams 2>&1 |  sed -n '/========================= RTP Streams ========================/,/==============================================================/p' |tail -n +3| head -n -1 | grep X$


}



#Interface packet drop

function DroppedPackets(){
# remarks:
# user for function and change the interface to : `ip -o link show | awk -F': ' '{print $2}' |grep -v lo`
# change the packet variable to use : /sys/class/net/$interface1/statistics/* and verify drops and errors.

interface1=$(ifconfig -a | sed 's/[ \t].*//;/^\(lo\|\)$/d' | head -1)
interface2=$(ifconfig -a | sed 's/[ \t].*//;/^\(lo\|\)$/d' | head -2 | tail -1)
ip=$(ifconfig | grep -E -o "([0-9]{1,3}[\.]){3}[0-9]{1,3}" | head -1)
ip_2=$(ifconfig | grep -E -o "([0-9]{1,3}[\.]){3}[0-9]{1,3}" | head -4 | tail -1)
packet=$(ping -c 100 $ip | grep "packet loss" | awk -F ',' '{print $3}' | awk '{print $1}')
packet2=$(ping -c 100 $ip_2 grep "packet loss" | awk -F ',' '{print $3}' | awk '{print $1}')
echo "There are $packet packet loss to the following ip: $ip"
echo "There are $packet packet loss to the following ip: $ip_2"

if [ "$interface1" != null ]
then
	grep '.*' /sys/class/net/$interface1/statistics/*
else
	echo "No Such interface"
fi

if [ "$interface2" != null ]
then
        grep '.*' /sys/class/net/$interface2/statistics/*
else
        echo "No Such interface"
fi


}

printf "          Welcome to sip latency Debugger\n"
while true;
do
	echo -e "          \e[31mAttention ! Any tapping that does not match the settings will exit the program immediately\e[0m"
	printf "          For module debugging please press 1\n          For SipPacketsAnalyzer please press 2\n          For packet drop please press 3\n"
	printf "\n"
	read -p "Press a number: " press

	if [ "$press" = "1" ]
	then
		printf "\n"
		Modules
		printf "\n"

	elif [ "$press" = "2" ]
	then
		printf "\n"
		SipLatency
		printf "\n"
		
	elif [ "$press" = "3" ] 
	then
		printf "\n"
		DroppedPackets
		printf "\n"
	else
		echo "Wrong press, exiting ... " 
		exit
	fi
done

exit $0


