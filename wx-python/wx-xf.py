#!/usr/bin/env python
# -*- coding: utf-8 -*-

from flask import Flask,request, redirect, url_for
import logging
from wechatpy.utils import check_signature
from wechatpy.exceptions import InvalidSignatureException
from wechatpy import parse_message
from wechatpy.replies import TextReply
import os
from openai import OpenAI
from sparkai.llm.llm import ChatSparkLLM, ChunkPrintHandler
from sparkai.core.messages import ChatMessage
import re

token = "whinger"

records = []
MAXLEN = 10
app = Flask(__name__)

SPARKAI_URL = 'wss://spark-api.xf-yun.com/v1.1/chat'
SPARKAI_APP_ID = '9eb6b475'
SPARKAI_API_SECRET = 'ODRhZDU1ZDhkMmZlYjA5YTEyN2Q3NDdl'
SPARKAI_API_KEY = 'd859c2ee5af065be5d31702bcc9d9bfd'
SPARKAI_DOMAIN = 'lite'

# 微信消息接口
@app.route('/weixin',methods=["POST","GET"])
def main():
    logging.debug('进入主页面')
    if(len(request.args)<2):
        return redirect(url_for('index'))
    try:
        signature = request.args.get("signature", "")
        timestamp = request.args.get("timestamp", "")
        nonce = request.args.get("nonce", "")
        echostr = request.args.get("echostr", "")
        # echostr是微信用来验证服务器的参数，需原样返回
        if echostr:
            try:
                print('正在验证服务器签名')
                check_signature(token, signature, timestamp, nonce)
                print('验证签名成功')
                return echostr
            except InvalidSignatureException as e:
                print('检查签名出错: '.format(e))
                return 'Check Error'
        # 也可以通过POST与GET来区别
        # 不是在进行服务器验证，而是正常提交用户数据
        print('开始处理用户消息')
        result = handlemsg(request.data)
        xml = result[0]
        return xml
    # 处理异常情况或忽略
    except Exception as e:
        print("exception")

def txtreply(msg,txt):
    reply = TextReply(content=txt, message=msg)
    xml = reply.render()
    return xml

def aireply(con):
    spark = ChatSparkLLM(
    spark_api_url=SPARKAI_URL,
    spark_app_id=SPARKAI_APP_ID,
    spark_api_key=SPARKAI_API_KEY,
    spark_api_secret=SPARKAI_API_SECRET,
    spark_llm_domain=SPARKAI_DOMAIN,
    streaming=False,
    )
    messages = [ChatMessage(
        role="user",
        content=con
    )]
    handler = ChunkPrintHandler()
    a = spark.generate([messages], callbacks=[handler])
    res = str(a)
    match = re.search(r"text='([^']*)'", res)
    extracted_text = match.group(1)
    return extracted_text

def handlemsg(data):
    msg = parse_message(data)
    print(msg)
    content = aireply(msg.content)
    xml = txtreply(msg, content)
    return [xml]


@app.route('/index',methods=["GET"])
def index():
    print('GET访问')
    return 'The index page'

if __name__ == '__main__':
    app.run(host='0.0.0.0',debug=True,port=80)
