<?php
/**
 * 日期相关函数学习
 * User: HP
 * Date: 2017-10-18
 * Time: 9:42
 */

//1.PHP Date() 函数把时间戳格式化为更易读的日期和时间。语法：date(format,timestamp)
date_default_timezone_set("PRC");//设置我的默认时区为北京时间
echo "今天是 " . date("Y/m/d") ."\n\r";
echo "今天是 " . date("Y.m.d") ."\n\r";
echo "今天是 " . date("Y-m-d") ."\n\r";
echo "今天是 " . date("l"). "\n\r";

//获得简单的时间,PHP date() 函数会返回服务器的当前日期/时间！
echo "现在时间是".date("h:i:sa")."\n\r";

date_default_timezone_set("Asia/shanghai");
echo "当前时间是".date("h:i:sa")."\n\r";

//2.PHP strtotime() 函数用于把人类可读的字符串转换为 Unix 时间。语法:strtotime(time,now)
$d=strtotime("9:20:20am May 15 2017");
echo "创建日期是".date("y-m-d h:i:sa",$d)."\n\r";


function add(){
    $d=strtotime("tomorrow");
    echo "日期是".date("y-m-d h:i:sa",$d)."\n\r";
    $x=strtotime("next Saturday");
    echo "日期是".date("y-m-d h:i:sa",$x)."\n\r";
    $z=strtotime("+3 Monday");
    echo "日期是".date("y.m.d h:i:sa",$z)."\n\r";
}
add();

//3.date_create() 函数返回新的 DateTime 对象。语法：date_create(time,timezone);
$d=date_create("2017-10-18");
echo date_format($d,"y/m/d")."\n\r";


//4.date_diff() 函数返回两个 DateTime 对象间的差值。语法：date_diff(datetime1,datetime2,absolute);
$date=date_create("2017-8-6");
$date1=date_create("2016-5-7");
$diff=date_diff($date,$date1);
echo $diff->format("%R%a days")."\n\r";


//5.time() 函数返回自 Unix 纪元（January 1 1970 00:00:00 GMT）起的当前时间的秒数。
$t=time();
echo ($t."\n\r");
echo (date("2015-10-12",$t))."\n\r";


//6.date_modify() 函数修改时间戳。语法：date_modify(object,modify);
$date=date_create("2016-4-25");
date_modify($date,"+4 days");
echo date_format($date,"y-m-d");