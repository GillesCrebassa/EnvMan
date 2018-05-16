#!/bin/ksh
if [[ $# != 1 ]];then
echo "error parameter"
fi
echo $1 | . $HOME/.profile 1>/dev/null
grep "custom.action.compile" $STEFORM_HOME/Config/optimization.properties |cut -d "=" -f "2" 
