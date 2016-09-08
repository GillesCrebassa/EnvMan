#!/bin/ksh
. $HOME/.profile 1>/dev/null
port_hex=$(cat $tuxconf/tsd.xml |grep "<arguments>" |grep -v "\.out" |cut -f "2" -d ":" |cut -f "1" -d " ")
printf "%x\n" $port_hex

