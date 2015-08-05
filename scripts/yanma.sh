#!/bin/sh
while read LINE
do
   LEN=${#LINE}
   MM=2
   if [ $LEN -lt 6 ];then 
	MM=1
	else
	if [ $LEN -gt 16 ];then
	MM=3
	fi
   fi
HALF=`expr $LEN / 2` 
UU=`expr $HALF - $MM`
MM2=`expr $MM \* 2`
SUB=${LINE:$UU:$MM2} 
echo ${LINE/$SUB/***}

done < ./pt.txt
