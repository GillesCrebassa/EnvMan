#!/bin/ksh
. $HOME/.profile 1>/dev/null
cd $JBOSS_HOME
#./run.sh -V |grep JBoss |grep -v "Bootstrap" |cut -f "2" -d " "
if [[ -f version.txt ]];then
	cat version.txt |grep "JBoss"
#	cat version.txt |grep "JBoss" |cut -f "7" -d " "
else
	./bin/run.sh -V |grep JBoss |grep -v "Bootstrap" |cut -f "2" -d " "
fi
