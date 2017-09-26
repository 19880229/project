<?php
require_once __DIR__ . '/db/DbHelper.php';

/**
 * 查询学生信息列表信息
 */
function getStudentList() {
    //获取mysql 链接对象
    $mysql = DbHelper::getPDO();

    //定义sql语句
    $sqlStr = <<<sql
    SELECT
      `name` as studentName,
      `age`
    FROM student
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
