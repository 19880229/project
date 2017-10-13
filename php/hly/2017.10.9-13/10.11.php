<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2017-10-11
 * Time: 18:09
 */

require_once __DIR__ . '/../db/DbHelper.php';
class book{
    public function add() {

        //获取mysql 链接对象
        $mysql = DbHelper::getPDO();

        //定义sql语句
        $sqlStr = <<<sql
    
    INSERT INTO book (name,author, salary, type ,addTime, updateTime)
         VALUES ('《西游记》','吴承恩',50,'名著', 2017-5-1,2016-8-2)";
sql;
        
        //准备sql语句
        $stmt = $mysql->prepare($sqlStr);
        //执行sql语句
        $result=$stmt->execute();
        //获取返回结果
        return $result;
        //打印结果

    }



    public function update(){
        $mysql = DbHelper::getPDO();

        //定义sql语句
        $sqlStr = <<<sql
    
    UPDATE book
       SET name = '《隋唐志传》'
      WHERE author = '罗贯中'
sql;


        //准备sql语句
        $stmt = $mysql->prepare($sqlStr);
        //执行sql语句
        $result=$stmt->execute();

        //打印结果
        return $result;
    }


    public function select(){
        $mysql = DbHelper::getPDO();

        //定义sql语句
        $sqlStr = <<<sql
    
    select
a.`name`,b.`name`,b.author,b.salary,b.type
from bookshelves a
LEFT join book b
on a.id = b.bookShelves_id
where author='鲁迅'"
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

$book =new book();

$book->add();
