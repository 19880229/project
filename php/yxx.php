<?php
/**
 * Created by PhpStorm.
 * User: 贤贤
 * Date: 2017/9/26
 * Time: 10:43
 */
//PHP if else
function calculate() {
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
shuoushu();



//连接数据库
require_once __DIR__ . '/db/yxx1.php';
/**
 * 查询学生信息列表信息
 */
function getStudentList() {
    //获取mysql 链接对象
    $mysql = DbHelper::getPDO();
    //定义sql语句
    $sqlStr = <<<sql
   SELECT 
sql;
    //准备sql语句
    $stmt = $mysql->prepare($sqlStr);
    //执行sql语句
    $stmt->execute();
    //获取返回结果
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //打印结果
    echo var_dump($result);
}
//调用方法
getStudentList();



//查询会议详细信息的接口

