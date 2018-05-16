#!/bin/ksh
. $HOME/.profile 1>/dev/null
pdflatex --version 2>&1 |grep "Copyright" |cut -d " " -f "2"
