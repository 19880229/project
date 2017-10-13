<?php
/**
 * 1.函数学习
 *
 * 2.IF 语句学习
 *
 * 3.switch 语句学习
 *
 * 4.for 循环学习
 *
 * 5.foreach 循环学习
 *
 * if 语句 - 如果指定条件为真，则执行代码
 *
 * if...else 语句 - 如果条件为 true，则执行代码；如果条件为 false，则执行另一端代码
 *
 * if...elseif....else 语句 - 选择若干段代码块之一来执行
 *
 * switch 语句 - 语句多个代码块之一来执行
 */

//常量
const a = 1;

//1.函数学习
function write() {
    echo "Hello World!" . "\n\r";
}

write();//调用函数

//PHP 函数参数
function lastName($lName, $year) {
    echo "$lName 张 Born in $year" . "\n\r";
}

lastName('梦', 1995);
lastName('涛', 1998);

//引用参数
$message = "";
function hello(&$message) {
    $message = "hello";
}

hello();
echo $message;

//PHP 默认参数值
function math($minNumber = 60) {
    echo "The number is $minNumber" . "\n\r";
}

math();//将使用默认值 60
math(70);
math(85);


//PHP 函数 - 返回值
function sum($n, $m) {
    $v = $n + $m;
    return $v;

}

$a = sum(4, 5);
echo ($a) . "\n\r";

echo "5 + 10 = " . sum(5, 10) . "\n\r";
echo "10 + 10 = " . sum(10, 10) . "\n\r";
echo "12 + 10 = " . sum(12, 10) . "\n\r";


//2.IF 语句学习
function void() {
    $y = 0;
    if ($y > 20) {
        echo "Have a good morning!" . "\n\r";
    } elseif ($y > 3) {
        echo "Have a good afternoon!" . "\n\r";
    } else {
        echo "Have a good evening!" . "\n\r";
    }
}

void();

//3.switch 语句学习
function add() {
    $x = 6;
    switch ($x) {
        case 1:
            echo "星期一" . "\n\r";
            break;
        case 2:
            echo "星期二" . "\n\r";
            break;
        case 3:
        case 4:
            echo "星期四" . "\n\r";
            break;
        case 5:
            echo "星期五" . "\n\r";
            break;
        case 6:
            echo "星期六" . "\n\r";
            break;
        case 7:
            echo "星期日" . "\n\r";
            break;
        default:
            echo "No number between 1 and 7 " . "\n\r";
    }
}

add();


//4.for 循环学习
function update() {
    for ($z = 0; $z <= 100; $z++) {
        if ($z % 3 == 0) {
            echo "这个数是" . $z . "\n\r";

        }

    }
}

update();


//5.foreach 循环学习 foreach 循环只适用于数组
function calculate() {
    $colors = array("red", "green", "blue", "yellow");//索引数组
    //$colors = ["zhangsan"=>"lisi","wangwu"=>"zhaoliu"];//关联数组
    foreach ($colors as $key => $item) {
        echo $item . "\n\r";
    }

}

calculate();

//PHP 索引数组
$colors[0] = 'red';
$colors[1] = 'green';
$colors[2] = 'blue';
$colors = array('red', 'green', 'blue');
echo "I like " . $colors[0] . ", " . $colors[1] . " and " . $colors[2] . "." . "\n\r";

//PHP 关联数组

$age = array("Bill" => "23", "Joe" => "15", "Peter" => 35);
echo "Peter is " . $age['Peter'] . " years old." . "\n\r";


//多维数组
$people = ["中国人" => ["河北人" => ["石家庄" => "张三"]]];
foreach ($people as $p) {
    foreach ($p as $m) {
        foreach ($m as $k) {
            echo $k;
        }
    }
}

//while循环
$a = 0;;
while ($a < 100) {
    echo $a;
}
do {
    $a++;
} while ($a < 100);

