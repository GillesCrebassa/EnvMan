#!/bin/ksh
. $HOME/.profile 1>/dev/null
vacman_version=$(ls -l $libob/libaal2sdk.a |cut -f "2" -d ">")
echo $vacman_version


