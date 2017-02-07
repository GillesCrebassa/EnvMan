#!/bin/ksh
. $HOME/.profile 1>/dev/null
if [[ "${CWDBOWNER}#DUMMY" == "${CWDBOWNER}" ]];then
   exit
fi
if [[ "${CWDBPASWD}#DUMMY" == "${CWDBPASWD}" ]];then
   exit
fi

echo $ORACLE_SID 

