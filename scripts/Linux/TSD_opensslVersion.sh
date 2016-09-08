#!/bin/ksh
. $HOME/.profile 1>/dev/null
pk_tm |grep OpenSSL |grep -v "Copyright" |cut -f "2" -d " "
