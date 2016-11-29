#!/bin/ksh
. $HOME/.profile 1>/dev/null
version=$(mvn -v | grep "Maven version:" |cut -f "3" -d " ")
if [[ ${version}#dum == "#dum" ]]; then
   version=$(mvn -v | grep "Apache Maven" |cut -f "3" -d " ")
fi
echo $version
