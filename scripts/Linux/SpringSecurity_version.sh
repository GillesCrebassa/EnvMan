#!/bin/ksh
. $HOME/.profile 1>/dev/null
cd $jdep
version=$(jar -tf *.ear |grep -i spring |grep -i security|sed -e "s/lib\/spring-security-//g")
echo $version

