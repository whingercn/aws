<?php
 
    class RespMsg {
 
        public function stockInfo($stockCode) {
 
            $ch = curl_init();

            $header=array();
 
            $header[]="Content-Type: text/plain; charset=UTF-8";
 
            //$header[]="Host: 192.168.242.128";
 
            $header[]="Accept: text/html, image/gif, image/jpeg, *; q=.2, */*; q=.2";
 
            $header[]="Connection: keep-alive";
 
            //$header[]="Content-Length: ".strlen($menuJson);

            if(empty($stockCode))
 
                $stockCode="000001";
 
            if(strncmp($stockCode,"00",2)==0 || strncmp($stockCode,"200",3)==0 || strncmp($stockCode,"300",3)==0 || strncmp($stockCode,"399",3)==0) {
 
                $url = "http://hq.sinajs.cn/list=sz".$stockCode;
 
            } else if(strncmp($stockCode,"60",2)==0 || strncmp($stockCode,"900",3)==0) {
 
                $url = "http://hq.sinajs.cn/list=sh".$stockCode;
 
            }

            if(strcmp($stockCode,"000001")==0) {
 
                $url = "http://hq.sinajs.cn/list=sh".$stockCode.",sz".$stockCode; 
 
            }
 
              
 
            curl_setopt($ch, CURLOPT_URL, $url);
 
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
 
            curl_setopt($ch, CURLOPT_POST, 1);
 
            //curl_setopt($ch, CURLOPT_POSTFIELDS, $menuJson);
 
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 
            curl_setopt($ch, CURLOPT_BINARYTRANSFER, true) ;
 
            curl_setopt($ch, CURLOPT_HEADER, false);
 
            $res = curl_exec($ch);
 
            if(curl_errno($ch)) {
 
                print curl_error($ch);
 
                $res="0";
 
            } else {
 
                curl_close($ch);
 
            } 
 
            //@header('Content-Type:text/plain; charset=utf-8');
 
            $res=mb_convert_encoding($res,"UTF-8","EUC-CN");
            return $res;
        }
      
 
    }
 
?>
