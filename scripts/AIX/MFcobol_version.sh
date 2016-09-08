#!/bin/ksh
. $HOME/.profile 1>/dev/null
version=$(cob -V 2>/dev/null |grep "version" |cut -f "2")
wrappack=$(cob -V 2>/dev/null |grep "PTI" |cut -d "=" -f "2")
echo $version - $wrappack
