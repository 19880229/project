<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2017-10-09
 * Time: 10:19
 */

/*require __DIR__ . '/../db/DbHelper.php';
final class GetInfo{

    public function get($seminarId){
        $mysql = $pdo = DbHelper::getPDO();
        $sql = <<<GOF
        SELECT 
    seminarId,
    tenantId,
    sceneName,
    status
 FROM searchSeminar 
 ORDER BY seminarId DESC
 limit 0,10
 
GOF;
        $sth = $mysql->prepare($sql);
        $sth->bindValue('seminarId',$seminarId);
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
    }
}

$dao = new GetInfo();
$dao->get(20);*/

function getBookList(){
    $dbms = 'mysql';     //数据库类型
    $host = 'localhost'; //数据库主机名
    $dbName = 'library';    //使用的数据库
    $user = 'root';      //数据库连接用户名
    $password = 'root';          //对应的密码
    $dsn = "$dbms:host=$host;dbname=$dbName";


    $dbh = new PDO($dsn, $user, $password); //初始化一个PDO对象
    $sql = "INSERT INTO book (name,author, salary, type ,addTime, updateTime)
         VALUES ('《西游记》','吴承恩',50,'名著', 2017-5-1,2016-8-2);";
    $sql="UPDATE book
       SET name = '《隋唐志传》'
      WHERE author = '罗贯中';";
    $sql="select
a.`name`,b.`name`,b.author,b.salary,b.type
from bookshelves a
LEFT join book b
on a.id = b.bookShelves_id
where author='鲁迅'";
    $pre = $dbh->prepare($sql);
    $pre->execute();
    $result = $pre->fetchAll(PDO::FETCH_ASSOC);
    echo var_dump($result)."<br>";
}
getBookList();