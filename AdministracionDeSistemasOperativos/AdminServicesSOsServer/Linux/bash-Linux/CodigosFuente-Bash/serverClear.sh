#!/bin/bash



ServerUsage="$(df -h / | grep -v Use| awk '{print $5}' | cut -d '%' -f1)"
printf "Your server usage is: $ServerUsage"

AutomaticDialerSql="/var/log/automatic_dialer/sql"
AutomaticDialerDebug="/var/log/automatic_dialer/debug"

CtiServerActions="/var/log/cti_server/actions"
CtiServerDebug="/var/log/cti_server/debug"

CallCenterActions="/var/log/callcenter/actions"
CallCenterDebug="/var/log/callcenter/debug"

ApacheErrorLog="/var/log/apache2/error.log"
ApacheAccessLog="/var/log/apache2/access.log"




#add echo  to each function example on the CTI.
#use regex insted of numbers

function IsOk()
{
        if [ $? -eq 0 ]
        then
                LOG " Operation completed successfully "
        else
                LOG " ERROR : there is no such file or directory "
        fi


}



function AutomaticDialer()
{
	[ -f "$AutomaticDialerSql" ] && { echo " " > $AutomaticDialerSql  ; }
        IsOk
        [ -f "$AutomaticDialerDebug" ] && { echo " " > $AutomaticDialerDebug  ; }
        IsOk

}





function CtiServer()
{
        [ -f "$CtiServerActions" ] && { echo " " > $CtiServerActions ; }
	echo "rewrie CTI Actions file:"
        IsOk
        [ -f "$CtiServerDebug" ] && { echo " " > $CtiServerDebug  ; }
        IsOk
        rm -rf /var/log/cti_server/20*
        IsOk

}



function Callcenter()
{
        [ -f "$CallCenterActions" ] && { echo " " > $CallCenterActions ;  }
        IsOk
        [ -f "$CallCenterDebug" ] && { echo " " > $CallCenterDebug ;  }
        IsOk
        rm -rf /var/log/callcenter/20*
        IsOk

}



function Apache()
{

        [ -f "$ApacheErrorLog" ] && { echo " " > $ApacheErrorLog ;  }
        IsOk
        [ -f "$ApacheAccessLog" ] && { echo " " > $ApacheAccessLog ;  }
        IsOk

}





function CrystalManager()
{

        rm -rf /var/log/crystalmanager/20*
        IsOk

}




function ServerUsage()
{
        ServerUsage="$(df -h / | grep -v Use| awk '{print $5}' | cut -d '%' -f1)"
        printf "\nYour server usage is: $ServerUsage"
	return $ServerUsage
#duplicate variable!!!!!!
}



function Backup()
{
#need to verify if there is backup on tikal cloud.

        if [ "$ServerUsage" -gt 18 ]
        then


                HN=$HOSTNAME

                cd /backup/$HN-backup || exit
                echo "\nThe deleted files :"
                #touch -d "2019-07-29 02:00:00" $usr-Test-backup-20190728.tar.gz
                find . -maxdepth 1 -size +50M -mtime +0 -type f -exec rm -v "$(readlink -f '{}')" ';'
                IsOk
                echo "\nThe rest files :"
                find . -maxdepth 1 -type f -exec ls -a {} ';'
                IsOk
        fi

}



function Mysql()
{

        ServerUsage="$(df -h / | grep -v Use| awk '{print $5}' | cut -d '%' -f1)"
        printf "Your server usage is: $ServerUsage"


        if [ "$ServerUsage" -gt 80 ]
        then

                cd /var/log/mysql || exit
                MysqlLog="$(find . -maxdepth 1 -type f   -print0 | ls -ltr  | tail -1 | awk '{print $9}')"
               # mysql -padmintikal -e "PURGE BINARY LOGS TO '$Mysql';"
		echo "please run mysql -p -e "PURGE BINARY LOGS TO '$Mysql';" and check logs."
        fi

}



function Tdcc()
{

        ServerUsage="$(df -h / | grep -v Use| awk '{print $5}' | cut -d '%' -f1)"
        printf "Your server usage is: $ServerUsage"

        if [ "$ServerUsage" -gt 80 ]
        then
                cd /var/log/tdcc || exit
                #rm -rf /var/log/tdcc/Info
                rm -rf /var/log/tdcc/Error/RealTime.ERROR.20*
                rm -rf /var/log/tdcc/Warning/RealTime.WARNING.20*

        fi

}

function LongestCall()
{

long=$(sudo -u asterisk /usr/sbin/asterisk -rx'show channels verbose' |grep -v "from-call" \ | grep -o "..:..:.." | sort -n | tail -1)

hours=$(echo $long | awk -F":" '{print$1}')
mins=$(echo $long | awk -F":" '{print$2}')
secs=$(echo $long | awk -F":" '{print$3}')

hours2secs=$((10#$hours*3600))
mins2secs=$((10#$mins*60))
total_secs=$((10#$hours2secs+10#$mins2secs+10#$secs))

echo $total_secs


}



if [ "$ServerUsage" -gt 18 ]
then
	echo "$date"
	echo "\nThe script is starting now !"
	Tdcc()
	Mysql()
	Backup()
	ServerUsage()
	CrystalManager()
	Apache()
	Callcenter()
	AutomaticDialer()
	CtiServer()
fi

exit