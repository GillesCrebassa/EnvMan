#!/bin/ksh
. $HOME/.profile 1>/dev/null
gcc -v 2>&1 |grep "gcc version" |cut -d " " -f "3"
