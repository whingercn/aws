private function parserStock($str) {
 
          
 
    $arraykey=array("股票名字",
 
                "今日开盘价",
 
                "昨日收盘价",
 
                "当前价格",
 
                "今日最高价",
 
                "今日最低价",
 
                "竞买价",
 
                "竞卖价",
 
                "成交数(手)",
 
                "成交金额(万)",
 
                "买一(股)",
 
                "买一(元)",
 
                "买二(股)",
 
                "买二(元)",
 
                "买三(股)",
 
                "买三(元)",
 
                "买四(股)",
 
                "买四(元)",
 
                "买五(股)",
 
                "买五(元)",
 
                "卖一(股)",
 
                "卖一(元)",
 
                "卖二(股)",
 
                "卖二(元)",
 
                "卖三(股)",
 
                "卖三(元)",
 
                "卖四(股)",
 
                "卖四(元)",
 
                "卖五(股)",
 
                "卖五(元)",
 
                "日期",
 
                "时间");
 
                  
 
    if($str=="0")
 
        return $result;
 
          
 
    for($i=0,$pos2=0;$i<strlen($str);$i=$i+$pos2) {
 
        if(!($pos1=stripos($str,"=",$pos2))) {
 
            break;
 
        }
 
        if(!($pos2=stripos($str,';',$pos1)))
 
            break;
 
          
 
        $tmp=substr($str,$pos1+2,$pos2-$pos1-3);
 
          
 
        if(strlen($tmp)==0)
 
            return $result;
 
              
 
        $arraydata=explode(",",$tmp);
 
          
 
        for($i=0;$i<count($arraykey);$i++) {
 
            if(!$arraydata)
 
                break;
 
            $result=$result.$arraykey[$i].":".$arraydata[$i]."\n";
 
        }
 
          
 
        $result=$result."\n";
 
           
 
    }
 
      
 
    return $result;
 
          
 
}
