#!/bin/bash

fallocate -l 100M /var/log/automatic_dialer/sql 
fallocate -l 100M /var/log/automatic_dialer/debug 
fallocate -l 100M /var/log/callcenter/actions
fallocate -l 100M /var/log/callcenter/debug
fallocate -l 100M /var/log/apache2/error.log
fallocate -l 100M /var/log/apache2/access.log

D=$("date -d "/2 days ago/" '+%Y%m%d'")

echo "$DD"
#Backup
cd /backup/$HOSTNAME-backup

for i in 3
do
	touch -d "$D" %HOSTNAME-backup-$D-$i.tar.gz
	fallocate -l 100M $HOSTNAME-backup-$D-$i.tar.gz
done


#TdccWarning
cd /var/log/tdcc/Warning || return  mkdir /var/log/tdcc/Warning

for $DD in $D
do
	touch -d " 2019-$DDD-$DD 02:00:00" RealTime.WARNING.2019$DDD$DD
	fallocate -l 100M RealTime.WARNING.2019$DDD$DD
done



#TdccError
cd /var/log/tdcc/Error || return mkdir /var/log/tdcc/Error

for $DD in $D
do
        touch -d " 2019-$DDD-$DD 02:00:00" RealTime.ERROR.2019$DDD$DD
        fallocate -l 100M RealTime.ERROR.2019$DDD$DD
done


#Mysql

cd /var/log/mysql || return mkdir /var/log/mysql

for $DD in $D
do
        touch -d " 2019-$DDD-$DD 02:00:00" RealTime.ERROR.2019$DDD$DD
        fallocate -l 100M RealTime.ERROR.2019$DDD$DD
done

