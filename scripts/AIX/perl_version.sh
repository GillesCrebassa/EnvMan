#!/bin/ksh
. $HOME/.profile 1>/dev/null
perl -v |grep "This is perl," |cut -d " " -f "4"
