<?php
$url=$_POST['cdn'];
$paramArr=array('mail' => 'sndayunsdo@snda.com', 'type' => 'url','urls' => $url);
$appSecret="c8d46d341bea4fd5bff866a65ff8aea9";
function createSign($paramArr,$appSecret="c8d46d341bea4fd5bff866a65ff8aea9"){
    $sign=$appSecret;
    ksort($paramArr);
    foreach ($paramArr as $key => $val) {
        if ($key !='' && $val !='') {
            $sign .= $key.$val;
        }
    }
    $authkey = strtoupper(md5($sign.$appSecret));
    return $authkey;
}
$key=createSign($paramArr,$appSecret);

function file_get_contents_post($url1, $post) {  
    $options = array(  
        'http' => array(  
            'method' => 'POST',  
            'content' => http_build_query($post),  
        ),  
    );  
  
    $result = file_get_contents($url1, false, stream_context_create($options));  
  
    return $result;  
}  
  
$data = file_get_contents_post("http://sapi.grandcloud.cn/user.php?name=api&handle=refresh&api=1&cp=game", array('mail'=>'sndayunsdo@snda.com', 'type'=>'url','urls'=>$url,'authkey'=>$key));  
 
//echo $data; 
$obj=json_decode($data);
echo $obj->message;
echo "               ";
echo $obj->info; 
