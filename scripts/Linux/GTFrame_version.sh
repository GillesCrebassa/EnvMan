#!/bin/ksh
if [[ $# != 1 ]];then
echo "error parameter"
fi
echo $1 | . $HOME/.profile 1>/dev/null
#grep "STF_RELEASE=" $STEFORM_HOME/Profile/console.steform.sh |cut -d "=" -f "3" | cut -d "\"" -f "1"
#version=$(ls --color=never $STEFORM_HOME/lib/gtframe/runtime/server-business* |grep server | cut -d "-" -f "3" |sed -e "s/\.jar//g")
ls --color=never $STEFORM_HOME/lib/gtframe/runtime/server-business* >/dev/null 2>&1
if [[ $? -ne 0 ]];then
grep "STF_RELEASE=" $STEFORM_HOME/Profile/console.steform.sh |cut -d "=" -f "3" | cut -d "\"" -f "1"
else
ls --color=never $STEFORM_HOME/lib/gtframe/runtime/server-business* |grep server | cut -d "-" -f "3" |sed -e "s/\.jar//g"
fi
