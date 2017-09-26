<?php
$x=5;
$y=10;
$z=$x+$y;
$c=$y-$x;
$m=$x*$y;
$n=$y/$x;
echo $z."\r\n";
echo $c."\r\n";
echo $m."\r\n";
echo $n."\r\n";


function calculate() {
    $peoples = ["zhangsan", "lisi"];
    if (empty($peoples)) {
        echo "数据为空";
    } else {
        foreach ($peoples as $item) {
            echo $item."\r\n";
        }
    }
}
calculate();

function add($x = 0, $y = 0) {

    return $x + $y;
}
$result = add(10, 5);

//输出
echo "相加结果：".$result."\r\n";
function delete($x = 0, $y = 0) {

    return $x - $y;
}
$result = delete(10, 5);

//输出
echo "相减结果：".$result."\r\n";

function mul($x = 0, $y = 0) {

    return $x * $y;
}
$result = mul(10, 5);

//输出
echo "相乘结果：".$result."\r\n";


$z=5;
$t=15;
if($t+$z<10){
    echo "Have a good day!";

}
elseif($t+$z>30){
    echo "Have a good night!";
}else
{
    echo "Have a good morning!";
}
