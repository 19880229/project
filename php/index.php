<?php


//变量定义
$a;//语法对尽量不要这样写
$a = 0;//正常用法

//数据类型 int float array  string  object
$name = "willie";
$count = 0;
$peoples = ["zhangsan", "lisi"];
$people = new stdClass();
$people->name = "name";


//自定义函数(方法)
//有返回值
function add($x = 0, $y = 0) {

    return $x + $y;
}

//无返回值
function voidAdd(&$x, &$y) {
    $x++;
    $y++;
}

//方法调用
$result = add(10, 5);

//输出
echo "相加结果：" . $result . "\r\n";

//PHP if else
function calculate() {
    $peoples = ["zhangsan", "lisi"];
    if (empty($peoples)) {
        echo "数据为空";
    } else {
        foreach ($peoples as $item) {
            echo $item . "\r\n";
        }
    }
}

calculate();
