<?php
  $wechatObj = new wechatCallbackAPI();
  $wechatObj->valid(); 
  class wechatCallbackAPI {
    private $token = "whinger";
 
    private $appId = "APPID";
 
    private $appSecret = "APPSECRET";
     
    private function checkSignature() {
      $signature = $_GET["signature"];
      $timestamp = $_GET["timestamp"];
      $nonce = $_GET["nonce"];  
           
      $tmpArr = array($this->token, $timestamp, $nonce);
      sort($tmpArr);
      $tmpStr = implode($tmpArr);
      $tmpStr = sha1($tmpStr);
       
      if($tmpStr == $signature) {
        return true;
      } else {
        return false;
      }
    }
 
    public function valid() {
      $echoStr = $_GET["echostr"];
       
      //valid signature, option
      if($this->checkSignature()){
        echo $echoStr;
        exit;
      }
    }
  }
?>
