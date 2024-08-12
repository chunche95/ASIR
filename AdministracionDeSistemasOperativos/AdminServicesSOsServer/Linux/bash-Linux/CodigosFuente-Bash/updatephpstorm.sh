#!/bin/bash

ENVIRONMENT='production'

#todo
#source from script path
#implement clean up (pack previous version, remove old version if user answered questions with yes)

source phpstorm_manual_install.sh
source phpstorm_manual_install2.sh
source phpstorm_manual_install3.sh

step01 "$@"
step02 "$@"
step03 "$@"