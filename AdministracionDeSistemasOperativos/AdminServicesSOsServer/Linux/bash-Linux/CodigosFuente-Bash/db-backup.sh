#!/bin/bash
# Allow execute file
chmod +x db-backup.sh

# Database credentials
user="app"
password="toor"
host="localhost"
db_name="app"

# Other options
backup_path="backups"
date=$(date +"%d-%b-%Y")

# create dit
mkdir -p $backup_path;

# Set default file permissions
umask 177

# Dump database into SQL file
mysqldump --user=$user --password=$password --host=$host $db_name > $backup_path/$db_name-$date.sql

# Delete files older than 30 days
find $backup_path/* -mtime +30 -exec rm {} \;

# Run script
# ./db-backup.sh
