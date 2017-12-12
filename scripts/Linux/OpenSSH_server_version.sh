#!/bin/ksh
. $HOME/.profile 1>/dev/null
version=$(rpm -qa |grep -i "openssh-server")
echo $version
