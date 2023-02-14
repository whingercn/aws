<?php
include_once "stock.php";
                $url="http://hq.sinajs.cn/list=sz002172";
                $stock = file_get_contents($url);
		$res = parserStock($stock);
echo $res;
