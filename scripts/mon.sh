for num in {1..10}  
do  
echo ""  >> /opt/logs/mon.log
/bin/curl --header "Referer :https://finance.sina.com.cn" "http://hq.sinajs.cn/list=sh000001" | awk -F ',' {'print $4'} >> /opt/logs/mon.log
echo "  dc,21.6" >> /opt/logs/mon.log
/bin/curl --header "Referer :https://finance.sina.com.cn" "http://hq.sinajs.cn/list=sz300059" | awk -F ',' {'print $4'} >> /opt/logs/mon.log
echo "  jk,26.00" >> /opt/logs/mon.log
/bin/curl --header "Referer :https://finance.sina.com.cn" "http://hq.sinajs.cn/list=sz300869" | awk -F ',' {'print $4'} >> /opt/logs/mon.log
sleep 3
done  

