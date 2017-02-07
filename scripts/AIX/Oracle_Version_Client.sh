#!/bin/ksh
. $HOME/.profile 1>/dev/null
if [[ "${CWDBOWNER}#DUMMY" == "${CWDBOWNER}" ]];then
   exit
fi
if [[ "${CWDBPASWD}#DUMMY" == "${CWDBPASWD}" ]];then
   exit
fi

coreOracle=$(echo "exit;" |sqlplus /nolog |grep Release | cut -f "3" -d " ")
echo $coreOracle 

