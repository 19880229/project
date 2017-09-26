<?php
/**
 * Created by PhpStorm.
 * User: 贤贤
 * Date: 2017/9/26
 * Time: 10:43
 */



//加法
function Add($num1=0,$num2=0){
    return $num=$num1+$num2;
}

//减法
function Micus($num1=0,$num2=0)
{
    return $num = $num1 - $num2;
}

//乘法
function Mul($num1=0,$num2=0)
{
    return $num = $num1 * $num2;
}

//除法
function Div($num1=0,$num2=0)
{
    return $num = $num1 / $num2;
}

$result = Add(10, 5);
echo"相加结果：".$result."\r\n";

$result = Micus(10, 5);
echo"相减结果：".$result."\r\n";

$result = Mul(10, 5);
echo"相乘结果：".$result."\r\n";

$result = Div(10, 5);
echo"相除结果：".$result."\r\n";

function Name()
{
    $family = ["Zhao", "Qian", "Sun", "Li"];
    if (empty($family)) {
        echo "数据为空";
    }
    else {
        foreach ($family as $item) {
            echo $item . "\r\n";
        }
    }
}
Name();