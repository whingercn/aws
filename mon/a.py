#-*- coding: utf8 -*-
import os
import sys
import requests


######mail
import smtplib
import os
from email.mime.text import MIMEText
from email.header import Header
from_addr = 'nagios74@163.com'
password = 'nagios5874'
to_addr = '94290982@qq.com'
smtp_server = 'smtp.163.com'
msg = MIMEText('123','plain','utf-8')
 
msg['From'] = Header(from_addr)
msg['To'] = Header(to_addr)
msg['Subject'] = Header('new mail')
 
server = smtplib.SMTP_SSL()
server.connect(smtp_server,465)
server.login(from_addr, password)

server.sendmail(from_addr, to_addr, msg.as_string())
