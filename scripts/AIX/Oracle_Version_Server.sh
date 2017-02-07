#!/bin/ksh
. $HOME/.profile 1>/dev/null
if [[ "${CWDBOWNER}#DUMMY" == "${CWDBOWNER}" ]];then
   exit
fi
if [[ "${CWDBPASWD}#DUMMY" == "${CWDBPASWD}" ]];then
   exit
fi

coreOracle=$(echo "SELECT * FROM V\$VERSION;" |sqlplus -s ${CWDBOWNER}/${CWDBPASWD} |grep CORE | cut -f "2")
echo $coreOracle 

