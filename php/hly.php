<?php
/*$x=5;
$y=10;
$z=$x+$y; //相加
$c=$y-$x; //相减
$m=$x*$y; //相乘
$n=$y/$x; //相除
//输出加、减、乘、除
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

//相加
function add($x = 0, $y = 0) {

    return $x + $y;
}
$result = add(10, 5);
//输出
echo "相加结果：".$result."\r\n";

//相减
function delete($x = 0, $y = 0) {

    return $x - $y;
}
$result = delete(10, 5);
//输出
echo "相减结果：".$result."\r\n";

//相乘
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
}*/
//1.整合加、减、乘、除四个方法为一个方法（通过传参实现）

//if...elseif...else语句
/*function calculate ($sum1,$sum2,$flag){
if($flag=="add")
{
    return $sum1+$sum2;
}
elseif ($flag=="jian"){

    return $sum1-$sum2;
}
elseif ($flag=="mul"){

    return $sum1*$sum2;
}
elseif ($flag=="div"){

    return $sum1/$sum2;
}
}
$result=calculate("10", "5","add");
//输出
echo "相加结果：".$result."\r\n";
$result=calculate("10", "5","jian");
//输出
echo "相减结果：".$result."\r\n";
$result=calculate("10", "5","mul");
//输出
echo "相乘结果：".$result."\r\n";
$result=calculate("10", "5","div");
//输出
echo "相除结果：".$result."\r\n";*/



//switch....case语句
/*function update($sum1,$sum2,$flag){
    switch ($flag)
    {
        case '+':
            return $sum1+$sum2;
            break;
        case '-':
            return $sum1-$sum2;
            break;
        case '*':
            return $sum1*$sum2;
            break;
        case '/':
            return $sum1/$sum2;
            break;
        default:
            echo "操作错误";
    }
     }
$result=update("10", "5",'+');
//输出
echo "相加结果：".$result."\r\n";
$result=update("10", "5",'-');
//输出
echo "相减结果：".$result."\r\n";
$result=update("10", "5",'*');
//输出
echo "相乘结果：".$result."\r\n";
$result=update("10", "5",'/');
//输出
echo "相除结果：".$result."\r\n";*/

//2.将1-100中2的倍数的数据输出来
/*function add(){


    for($i=1;$i<=100;$i++)
    {
        if($i%2==0){
            echo $i."\r\n";

        }
}
}
add();*/

/*function add(){

    for ($x=0; $x<=10; $x++) {
        echo "数字是：".$x."\r\n";

    }
}
add();*/
echo "This is a test</br>";
echo "asdfasdfadsf";
echo '<hr>';
$mysql_server_name="localhost"; //数据库服务器名称
$mysql_username="root"; // 连接数据库用户名
$mysql_password="root"; // 连接数据库密码
$mysql_database="study"; // 数据库的名字

// 连接到数据库
$conn=mysqli_connect($mysql_server_name, $mysql_username, $mysql_password);
if (!$conn) {
    die("连接错误".mysqli_connect_error());
}else{

    echo '连接成功！';
}


