<?php
function record($sid) {
$code = mb_substr($sid,2,6,"UTF-8");
$stock_string="http://hq.sinajs.cn/list=$sid";
$info=explode(",",file_get_contents($stock_string));
$price=$info[3];
$deal=$info[8];
$time=$info[30]." ".$info[31];

$con = mysql_connect("rm-uf6mweh61gtlgfv54125010.mysql.rds.aliyuncs.com","weather","Weather123");
mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER_SET_CLIENT=utf8");
mysql_query("SET CHARACTER_SET_RESULTS=utf8");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("stock", $con);
$sql="insert into stock (stock_id,stock_price,stock_deal,stock_time) values ('$code',$price,$deal,'$time')";
mysql_query($sql);
mysql_close($con);
}

record(sh600109);
record(sz002169);
record(sz002436);
