<?php
/**
  * wechat php test
  */

//define your token
define("TOKEN", "whinger");
$wechatObj = new wechatCallbackapiTest();
$wechatObj->responseMsg();

class wechatCallbackapiTest
{
    public function responseMsg()
    {
        //get post data, May be due to the different environments
        $postStr = $GLOBALS["HTTP_RAW_POST_DATA"];

          //extract post data
        if (!empty($postStr)){
                
                  $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
                $RX_TYPE = trim($postObj->MsgType);

                switch($RX_TYPE)
                {
                    case "text":
                        $resultStr = $this->handleText($postObj);
                        break;
                    case "event":
                        $resultStr = $this->handleEvent($postObj);
                        break;
                    default:
                        $resultStr = "Unknow msg type: ".$RX_TYPE;
                        break;
                }
                echo $resultStr;
        }else {
            echo "";
            exit;
        }
    }

    public function handleText($postObj)
    {
        $fromUsername = $postObj->FromUserName;
        $toUsername = $postObj->ToUserName;
        $keyword = trim($postObj->Content);
        $time = time();
        $textTpl = "<xml>
                    <ToUserName><![CDATA[%s]]></ToUserName>
                    <FromUserName><![CDATA[%s]]></FromUserName>
                    <CreateTime>%s</CreateTime>
                    <MsgType><![CDATA[%s]]></MsgType>
                    <Content><![CDATA[%s]]></Content>
                    <FuncFlag>0</FuncFlag>
                    </xml>";             
        if(!empty( $keyword ))
        {
            $msgType = "text";

            $str = mb_substr($keyword,0,1,"UTF-8");
            $str_key = mb_substr($keyword,-6,6,"UTF-8");
            if($str == '1'){
                $url="http://t.weather.sojson.com/api/weather/city/101020100";
                $weatherJson = file_get_contents($url);
                $weather = json_decode($weatherJson, true);
                $city=$weather['cityInfo']['city'];
                $forecast=$weather['data']['forecast'];
                $today=$forecast[0];
                $high=$today['high'];
                $low=$today['low'];
                $ymd=$today['ymd'];
                $type=$today['type'];
                $shidu=$weather['data']['shidu'];
                $pm25=$weather['data']['pm25'];
                $quality=$weather['data']['quality'];
                $tom=$forecast[1];
                $hight=$tom['high'];
                $lowt=$tom['low'];
                $ymdt=$tom['ymd'];
                $typet=$tom['type'];
                $contentStr=$city."\n".$ymd." 天气:\n".$type.",".$low.",".$high.":\n湿度:".$shidu.", PM2.5:".$pm25.", 空气质量:".$quality."\n-------------------\n".$ymdt." 天气:\n".$typet.",".$lowt.",".$hight;
            } else {
                $contentStr = "info1";
            }
            $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
            echo $resultStr;
        }else{
            echo "Input something...";
        }
    }

    public function handleEvent($object)
    {
        $contentStr = "";
        switch ($object->Event)
        {
            case "subscribe":
                $contentStr = "Input something...";
                break;
            default :
                $contentStr = "Unknow Event: ".$object->Event;
                break;
        }
        $resultStr = $this->responseText($object, $contentStr);
        return $resultStr;
    }
    
    public function responseText($object, $content, $flag=0)
    {
        $textTpl = "<xml>
                    <ToUserName><![CDATA[%s]]></ToUserName>
                    <FromUserName><![CDATA[%s]]></FromUserName>
                    <CreateTime>%s</CreateTime>
                    <MsgType><![CDATA[text]]></MsgType>
                    <Content><![CDATA[%s]]></Content>
                    <FuncFlag>%d</FuncFlag>
                    </xml>";
        $resultStr = sprintf($textTpl, $object->FromUserName, $object->ToUserName, time(), $content, $flag);
        return $resultStr;
    }


}

?>
