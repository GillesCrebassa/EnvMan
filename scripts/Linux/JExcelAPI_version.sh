#!/bin/ksh
. $HOME/.profile 1>/dev/null
cd $jdep
version=$(jar -tf *.ear |grep -i jxl)
echo $version
