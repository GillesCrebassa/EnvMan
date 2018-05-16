#!/bin/ksh
. $HOME/.profile 1>/dev/null
if [[ ${jdep#DUMMY} != DUMMY ]];then
cd $jdep
version=$(jar -tf *.ear |grep -i aal)
echo $version
fi

