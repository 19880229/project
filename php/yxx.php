<?php
/**
 * Created by PhpStorm.
 * User: 贤贤
 * Date: 2017/9/26
 * Time: 10:43
 */

$num1=0;
$num2=0;
$num3=0;


//加法
function Add($num1,$num2){
    global $num1,$num2;
    $num3=$num1+$num2;

}
$result = Add(10, 5);
echo"相加结果：".$result."\r\n";