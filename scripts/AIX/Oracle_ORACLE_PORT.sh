#!/bin/ksh
. $HOME/.profile 1>/dev/null
if [[ "${CWDBOWNER}#DUMMY" == "${CWDBOWNER}" ]];then
   exit
fi
if [[ "${CWDBPASWD}#DUMMY" == "${CWDBPASWD}" ]];then
   exit
fi

tnsping $ORACLE_SID |grep ADDRESS | awk -F'PORT =' '{print $2}' |awk -F')' '{print $1}'

