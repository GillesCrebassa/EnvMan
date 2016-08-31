#!/bin/ksh
. $HOME/.profile 1>/dev/null
java -version 2>&1 |grep "java version" |cut -d " " -f "3" |tr -d "\""

