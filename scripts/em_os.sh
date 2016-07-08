#!/bin/ksh

platform='unknown'
unamestr=`uname`
if [[ $unamestr == 'Linux' ]]; then
	platform='Linux'
elif [[ $unamestr == 'AIX' ]]; then
	platform='AIX'
fi

echo $platform
exit 0

