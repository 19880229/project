<?php
/*/**
 * Created by PhpStorm.
 * User: 贤贤
 * Date: 2017/9/26
 * Time: 10:43
 */
//PHP if else
/*function calculate() {
    $peoples = ["zhangsan", "lisi"];
    if (empty($peoples)) {
        echo "数据为空";
    } else {
        foreach ($peoples as $item) {
            echo $item."\r\n";
            echo "<br>";
        }
    }
}
calculate();

//整合加、减、乘、除四个方法为一个方法（通过传参实现）
function calction($nub1,$nub2,$cala){
    if($cala=="add"){
        return $nub1+$nub2;
    } elseif($cala=="jianfa"){
        return $nub1-$nub2;
    } elseif ($cala=="chengfa"){
        return $nub1*$nub2;
    }elseif($cala=="chufa"){
        return $nub1/$nub2;
    }
}
$res1=calction("10","5","add");
echo"相加结果为：".$res1."\r\n"."<br>";
$res2=calction("10","5","jianfa");
echo"相加结果为：".$res2."\r\n"."<br>";
$res3=calction("10","5","chengfa");
echo"相加结果为：".$res3."\r\n"."<br>";
$res4=calction("10","5","chufa");
echo"相加结果为：".$res4."\r\n"."<br>";

//将1-100中2的倍数的数据输出来
function shuoushu(){
  for($nub3=0;$nub3<=100;$nub3++){
      if($nub3 % 2==0){
          echo"1-100中2的倍数有：".$nub3."\r\n";
      }else{
          echo"<br>";
      }
  }
}
shuoushu();*/


/*//查询会议
require_once __DIR__ . "/db/DbHelper.php";
function getStudentList(){
    //获取MySQL链接对象
    $mysql = DbHelper::getPDO();
    //定义SQL语句
    $sqlStr = <<<sql
select seminarId,tenantId,sceneName,status,name,createTime from searchSeminar 
limit 0,10
sql;
    //准备SQL语句
    $zb = $mysql->prepare($sqlStr);
    //执行SQL语句
    $zb ->execute();
    //获取返回结果
    $result = $zb ->fetchAll(PDO::FETCH_ASSOC);
    //打印结果
   echo var_dump($result);
   // echo json_encode($result);
}


getStudentList();*/


/*class Dog{
    protected $eyeNumber = 2;
    public function getEyeNumber(){
        return $this->eyeNumber;
    }
    public function yaff(){
        return "Dog yaff,wang..wang..";
    }
    public function run(){
        return "Dog run ..running .....";
    }
}
$dog = new Dog();
echo "dog have ".$dog ->getEyeNumber()."eyes.<br>";
echo $dog->yaff()."<br>".$dog->run();
echo "<br><br>";

class MyDoy extends Dog{
    private $name = "狗狗";
    public function getName()
    {
        return $this->name;
    }
    public function yaff()
    {
        return $this->name . "yaff,heng...heng..";
    }
}
$myDog = new MyDoy();
echo $myDog->getName()."have".$myDog->getEyeNumber()."eyes.<br>";
echo $myDog->yaff()."<br>".$myDog->run();*/

$dbms='mysql';
$host='124.239.180.30';
$dbName='dev';
$username='dev_rw';
$password='4VCK8lVM9qC';
$dsn="$dbms:host=$host;dbname=$dbName";

//获取MySQL连接地址
$aa = New PDO($dsn, $username, $password);
//事物
$aa->beginTransaction();
//定义MySQL语句
$sql = "SELECT seminarId,tenantId,sceneName,status,name  FROM searchSeminar limit 0,10";
//准备SQL语句
$pre = $aa->prepare($sql);
//执行SQL语句
$pre->execute();
//获取返回结果
$result = $pre ->fetchAll(PDO::FETCH_ASSOC);
//打印结果
echo json_encode($result)."<br>";







