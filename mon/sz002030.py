#-*- coding: utf8 -*-
import os
import sys
import requests

low = "17.55"
high = "18.30"
headers={'Referer' :'https://finance.sina.com.cn'}
url = 'https://hq.sinajs.cn/list=sz002030'
r = requests.get(url=url,headers=headers)

#url_return = os.system('/bin/curl "http://hq.sinajs.cn/list=sz000519"')
#pricelist = url_return.split(',')
#print(pricelist)
content = r.content.split(',',10)
np = content[3]
mailsend = 0
mailcontent = "null"
#print(np)
if float(np) > float(high):
    mailcontent = "jiyin, high " + np
    mailsend = 1

if float(np) < float(low) :
    mailcontent = "jiyin, low " + np
    mailsend = 1



######mail
import smtplib
import os
from email.mime.text import MIMEText
from email.header import Header
from_addr = 'nagios74@163.com'
password = 'nagios5874'
to_addr = '94290982@qq.com'
smtp_server = 'smtp.163.com'
msg = MIMEText(mailcontent,'plain','utf-8')
 
msg['From'] = Header(from_addr)
msg['To'] = Header(to_addr)
msg['Subject'] = Header('new mail')
 
server = smtplib.SMTP_SSL()
server.connect(smtp_server,465)
server.login(from_addr, password)

if mailsend :
    #print(mailcontent)
    server.sendmail(from_addr, to_addr, msg.as_string())
