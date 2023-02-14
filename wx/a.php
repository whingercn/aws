<?php
$city="通州";
$con = mysql_connect("localhost","root","whinger");
mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER_SET_CLIENT=utf8");
mysql_query("SET CHARACTER_SET_RESULTS=utf8");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("weather", $con);
$sql="select code,city from city where city='$city';";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
if(mysql_num_rows($result)==0){
    echo 0;
}
printf ("%s",$row[code]);
mysql_close($con);
echo $contentStr;
