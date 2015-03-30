<?php
/**
  * wechat php test
  */

header("Content-Type: text/html;charset=utf-8");
$timezone_identifier = "PRC";
date_default_timezone_set($timezone_identifier);

//define your token
define("TOKEN", "whinger");
$wechatObj = new wechatCallbackapiTest();
//$wechatObj->valid();
$wechatObj->responseMsg();

class wechatCallbackapiTest
{
	public function valid()
    {
        $echoStr = $_GET["echostr"];

        //valid signature , option
        if($this->checkSignature()){
        	echo $echoStr;
        	exit;
        }
    }

    public function responseMsg()
    {
		//get post data, May be due to the different environments
		$postStr = $GLOBALS["HTTP_RAW_POST_DATA"];

      	//extract post data
		if (!empty($postStr)){
                
              	$postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
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
			switch ($keyword) {
			case "1":   //write arrivetime
                                	$con = mysql_connect("localhost","a0530152136","16084850");
                                	mysql_query("SET NAMES 'utf8'");
					mysql_query("SET CHARACTER_SET_CLIENT=utf8");
					mysql_query("SET CHARACTER_SET_RESULTS=utf8");
					if (!$con)
					{
					die('Could not connect: ' . mysql_error());
					}
					mysql_select_db("a0530152136", $con);
					//mysql_query("select name from tbworktime;");
					$r_name=mysql_query("select name from tbuser where wxname ='".$fromUsername."';");
					$row1 = mysql_fetch_array($r_name);
					if (!empty ($row1['name']) ){
						$name=$row1['name'];
							}
					else
						{
						$name=$fromUsername;
						}
					$ins_date=date('Y-m-d');
					$ins_time=date('H:i:s');
					$insertstr="INSERT INTO `a0530152136`.`tbworktime` (`name`, `wxname`, `arrivetime`, `gotime`, `date`) VALUES ('".$name."', '".$fromUsername."','".$ins_time."', NULL, '".$ins_date."');";
					mysql_query($insertstr);
					$contentStr="record arrive time:  ".$ins_time;
					mysql_close($con);
					break;

			case "10": //read arrivetime;
                                	$con = mysql_connect("localhost","a0530152136","16084850");
                                	mysql_query("SET NAMES 'gb2312'");
					mysql_query("SET CHARACTER_SET_CLIENT=utf8");
					mysql_query("SET CHARACTER_SET_RESULTS=utf8");
					if (!$con)
					{
					die('Could not connect: ' . mysql_error());
					}
					mysql_select_db("a0530152136", $con);
					//mysql_query("select name from tbworktime;");
					$selectstr="select createtime as day,content from tbmemo where TO_DAYS(NOW()) - TO_DAYS(createtime) < 30 ;";
					$result=mysql_query($selectstr);
					$contentStr="";
					while($row = mysql_fetch_array($result))
						{
							 $contentStr=$contentStr.substr($row['day'],0,10).":".$row['content']."\n";
						}
					
					mysql_close($con); 
					break;
                                
                        
			case "100": //read arrivetime;
                                	$con = mysql_connect("localhost","a0530152136","16084850");
                                	mysql_query("SET NAMES 'gb2312'");
					//mysql_query("SET CHARACTER_SET_CLIENT=utf8");
					//mysql_query("SET CHARACTER_SET_RESULTS=utf8");
					if (!$con)
					{
					die('Could not connect: ' . mysql_error());
					}
					mysql_select_db("a0530152136", $con);
					//mysql_query("select name from tbworktime;");
					$ins_date=date('Y-m-d');
					$selectstr="select arrivetime from tbworktime where wxname='".$fromUsername."' and date='".$ins_date."' order by arrivetime limit 3;";
					$result=mysql_query($selectstr);
					$contentStr="today's arrivetime:";
					while($row = mysql_fetch_array($result))
						{
							 $contentStr=$contentStr.$row['arrivetime']."  ";
						}
					
					mysql_close($con); 
					break;
					
			case "2":
                                	$con = mysql_connect("localhost","a0530152136","16084850");
                                	mysql_query("SET NAMES 'utf8'");
					mysql_query("SET CHARACTER_SET_CLIENT=utf8");
					mysql_query("SET CHARACTER_SET_RESULTS=utf8");
					if (!$con)
					{
					die('Could not connect: ' . mysql_error());
					}
					mysql_select_db("a0530152136", $con);
					mysql_query("select name from tbworktime;");
					$result=mysql_query("select wxname from tbworktime where id=4;");
					$row=mysql_fetch_array($result);
					$contentStr=$row['wxname'];
					mysql_close($con);
                            		break;

			case "s":
			case "S":
			case "t":
			case "T":
				$url="http://api2.sinaapp.com/search/weather/?appkey=0020130430&appsecert=fa6095e113cd28fd&reqtype=text&keyword=shanghai";
				$weatherJson = file_get_contents($url);
				$weather = json_decode($weatherJson, true);
				$contentStr=$weather['text']['content'];
				break;	

			case "6":
				$url = "http://api2.sinaapp.com/search/stock/?appkey=0020130430&appsecert=fa6095e113cd28fd&reqtype=text&keyword=600550";
				$stockJson = file_get_contents($url);
				$stockInfo = json_decode($stockJson, true);
				$contentStr = $stockInfo['text']['content'];
				break;	

			case "7":
				$url = "http://api2.sinaapp.com/search/stock/?appkey=0020130430&appsecert=fa6095e113cd28fd&reqtype=text&keyword=600836";
				$stockJson = file_get_contents($url);
				$stockInfo = json_decode($stockJson, true);
				$contentStr = $stockInfo['text']['content'];
				break;	

			case "8":
			#	$url = "https://www.okcoin.com/api/userinfo.do?partner=3445194&sign=16F806490C886E03C48C98F2C93628F3";
			#	$okcoinJson = file_get_contents($url);
			$curlPost='partner=3445194&sign=16F806490C886E03C48C98F2C93628F3';
			$ch = curl_init();
			curl_setopt($ch,CURLOPT_URL,'https://www.okcoin.com/api/userinfo.do');
			curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);
			$okcoinJson = curl_exec($ch);
			curl_close($ch);
                        $okcoinInfo = json_decode($okcoinJson, true);
                        $contentStr = $okcoinInfo['info']['funds']['free']['cny'];

			#	break;	
			#	$file=file_get_contents('http://k.btc123.com/markets/okcoin/ltccny');
			#	$ltccny='/id=market_okcoinltccny>(.*?)<\/span>/is';
			#	$btccny='/id=market_okcoinbtccny>(.*?)<\/span>/is';
			#	preg_match($ltccny,$file,$r_ltccny);
			#	preg_match($btccny,$file,$r_btccny);
			#	$contentStr = "ltc:".$r_ltccny[1]."\n". "btc:".$r_btccny[1];
			#	$contentStr = "123";
				break;	


			default:	
					$res=explode(" ",$keyword);
					if (!empty($res[1]))
					{
						switch ($res[0]) {
						case "1": //write memo
							$memo=substr($keyword,2);
							$con = mysql_connect("localhost","a0530152136","16084850");
		                                	mysql_query("SET NAMES 'utf8'");
							mysql_query("SET CHARACTER_SET_CLIENT=utf8");
							mysql_query("SET CHARACTER_SET_RESULTS=utf8");
							if (!$con)
							{
							die('Could not connect: ' . mysql_error());
							}
							mysql_select_db("a0530152136", $con);
							$insertstr="INSERT INTO `a0530152136`.`tbmemo` (`content`, `wxname`) VALUES ('".$memo."', '".$fromUsername."');";
							mysql_query($insertstr);
							
							$contentStr='memo insert ok!';
							mysql_close($con);
		                            		break;

						case "2": //query weather
							$city1=substr($keyword,2);
							//$city=urlencode(mb_convert_encoding($city1, 'utf-8', 'gb2312'));
							$city=urlencode($city1);
							$url="http://api2.sinaapp.com/search/weather/?appkey=0020130430&appsecert=fa6095e113cd28fd&reqtype=text&keyword=".$city;
							$weatherJson = file_get_contents($url);
							$weather = json_decode($weatherJson, true);
							$contentStr=$weather['text']['content'];
							break;


						case "3": //stock info
							$stock=substr($keyword,2,6);
							if(preg_match("/[^\d-., ]/",$stock))
							{
								$contentStr="not all num!";
							} 
							else 
							{
								$url = "http://api2.sinaapp.com/search/stock/?appkey=0020130430&appsecert=fa6095e113cd28fd&reqtype=text&keyword=".$stock;
								$stockJson = file_get_contents($url);
								$stockInfo = json_decode($stockJson, true);
								$contentStr = $stockInfo['text']['content'];
							}
							break;

						case "4": //stock info my pi
							$stock=substr($keyword,2,6);
							$sc=substr($keyword,2,1);
							if(preg_match("/[^\d-., ]/",$stock))
							{
								$contentStr="not all num!";
							} 
							else 
							{
								switch ($sc){
								case "0":	
								$url = "http://scokpio.vicp.net:22222/stock.php?name=sz".$stock;
								$pires=file_get_contents($url);
								$contentStr=iconv('GB2312','UTF-8',$pires); //exchage string code 2312 to utf-8
								break;
								case "6":	
								$url = "http://scokpio.vicp.net:22222/stock.php?name=sh".$stock;
								$pires=file_get_contents($url);
								$contentStr=iconv('GB2312','UTF-8',$pires); //exchage string code 2312 to utf-8
								break;
								default:
								 $contentStr="sock num error!";
								}	
							}
							break;

						default:
							//$contentStr="使用说明：发送1，记录打卡时间；发送10，查询当日前3次打卡时间。";
							$contentStr="help:send 1,input arrive time;send 10,find today's arrive time;input s or t ,the weather of shanghai";
							break;
						}
					}else{
					//$contentStr="使用说明：发送1，记录打卡时间；发送10，查询当日前3次打卡时间。";
					$contentStr="help:send 1,input arrive time;send 10,find today's arrive time;input s or t ,the weather of shanghai";
					break;
					}
			}

                $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
                echo $resultStr;
                }else{
                	$contentStr="Input something...";
                        $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
                	echo $resultStr;
                }

        }else {
                echo "";
        	exit;
        }
    }
    
    
		
	private function checkSignature()
	{
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];	
        		
		$token = TOKEN;
		$tmpArr = array($token, $timestamp, $nonce);
		sort($tmpArr);
		$tmpStr = implode( $tmpArr );
		$tmpStr = sha1( $tmpStr );
		
		if( $tmpStr == $signature ){
			return true;
		}else{
			return false;
		}
	}
}

?>
