#!/bin/ksh
. $HOME/.profile 1>/dev/null
pk_tm |grep ctrmgr |cut -f "2-" -d " " |tr -d "(" | tr -d ")"
