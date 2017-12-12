#!/bin/ksh
. $HOME/.profile 1>/dev/null
version=$(lslpp -l |grep -i "openssh.base.server" |head -1)
echo $version
