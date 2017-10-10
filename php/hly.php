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

//连接数据库
//require_once __DIR__ . '/db/DbHelper.php';
/**
 * 查询学生信息列表信息
 */
/*function getStudentList() {
    //获取mysql 链接对象
    $mysql = DbHelper::getPDO();
    //定义sql语句
    $sqlStr = <<<sql
    SELECT 
    seminarId,
    tenantId,
    sceneName,
    status,
    name
 FROM searchSeminar limit 0,10
 ORDER BY id DESC
sql;

    //准备sql语句
    $stmt = $mysql->prepare($sqlStr);
    //执行sql语句
    $stmt->execute();
    //获取返回结果
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //打印结果
    echo json_encode($result);
}*/

//调用方法
//getStudentList();

/*$num = 1;

while($num<=100)
{
    if($num%2==0)
    {
        echo $num."\r\n";
    }
    $num++;
}*/
/*function add($sum1,$sum2,$count){
    if($count=="add1")
    {
        return $sum1+$sum2;
    }elseif ($count=="jian")
    {
        return $sum1-$sum2;
    }elseif ($count=="mul")
    {
        return $sum1*$sum2;
    }elseif ($count=="div")
    {
        return $sum1/$sum2;
    }
}
$result=add(10,5,"add1");
echo "输出结果".$result."<br>";
$result=add(10,5,"jian");
echo "输出结果".$result."<br>";
$result=add(10,5,"mul");
echo "输出结果".$result."<br>";
$result=add(10,5,"div");
echo "输出结果".$result."<br>";*/
/*function add($sum1,$sum2,$count){
    switch ($count){
        case "+":
            return $sum1+$sum2;
            break;
        case"-":
            return $sum1+$sum2;
            break;
        case"*":
            return $sum1*$sum2;
            break;
        case "/":
            return $sum1/$sum2;
            break;
    }
}
$result=add(10,5,"+");
echo "输出结果".$result."<br>";
$result=add(10,5,"-");
echo "输出结果".$result."<br>";
$result=add(10,5,"*");
echo "输出结果".$result."<br>";
$result=add(10,5,"/");
echo "输出结果".$result."<br>";*/



$dbms = 'mysql';     //数据库类型
$host = 'localhost'; //数据库主机名
$dbName = 'Study';    //使用的数据库
$user = 'root';      //数据库连接用户名
$password = 'root';          //对应的密码
$dsn = "$dbms:host=$host;dbname=$dbName";


$dbh = new PDO($dsn, $user, $password); //初始化一个PDO对象
$sql = "SELECT name FROM user";
$pre = $dbh->prepare($sql);
$pre->execute();
$result = $pre->fetchAll(PDO::FETCH_ASSOC);
echo var_dump($result)."<br>";

