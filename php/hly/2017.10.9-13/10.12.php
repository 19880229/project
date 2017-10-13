<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2017-10-11
 * Time: 18:09
 */

require_once __DIR__ . '/../db/DbHelper.php';

class book {
    public function add($name, $author, $salary, $type, $addTime, $updateTime) {

        //获取mysql 链接对象
        $mysql = DbHelper::getPDO();

        //定义sql语句
        $sqlStr = <<<sql
    
         INSERT INTO book (name,author, salary, type ,addTime, updateTime)
         VALUES ('$name','$author','$salary','$type', '$addTime','$updateTime');
sql;

        //准备sql语句
        $stmt = $mysql->prepare($sqlStr);
        //执行sql语句
        $result = $stmt->execute();
        //获取返回结果
        return $result;
        //打印结果
    }

    public function update($name, $author) {
        $mysql = DbHelper::getPDO();

        //定义sql语句
        $sqlStr = <<<sql
    
    UPDATE book
       SET name = '$name'
      WHERE author = '$author'
sql;


        //准备sql语句
        $stmt = $mysql->prepare($sqlStr);
        //执行sql语句
        $result = $stmt->execute();

        //打印结果
        return $result;
    }


    public function select($author) {
        $mysql = DbHelper::getPDO();

        //定义sql语句
        $sqlStr = <<<sql
    
    SELECT
  `name`  
FROM book
WHERE author = $author
ORDER BY id;
sql;


        //准备sql语句
        $stmt = $mysql->prepare($sqlStr);
        //执行sql语句
        $stmt->execute();
        //获取返回结果
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

}

$book = new book();
$book->add('《红楼梦》', '施耐庵', 50, '名著', '2017-4-1', '2017-5-2');
$book->update('《三国演义》', '罗贯中');
$book->select('鲁迅');