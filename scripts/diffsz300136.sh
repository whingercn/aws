
BG=`/bin/curl --header "Referer :https://finance.sina.com.cn" "http://hq.sinajs.cn/list=sz002030" | awk -F ',' {'print $4'} `
sleep 59
END=`/bin/curl --header "Referer :https://finance.sina.com.cn" "http://hq.sinajs.cn/list=sz002030" | awk -F ',' {'print $4'} `
DD=`echo "scale=3;($END - $BG)*1000 "|bc `
DF=`echo $DD | sed 's/.000//'`
DIFF=`echo $DF|awk '{print sqrt($DF*$DF)}'`
echo $BG,$END,$DIFF;
if [ $DIFF  -gt  30 ];then
/usr/bin/python2.7 mail.py;
fi
