<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2017-09-29
 * Time: 18:02
 */
class Db{
    public function PDO(){
        $dbms='mysql';     //数据库类型
        $host='124.239.180.30'; //数据库主机名
        $dbName='dev';    //使用的数据库
        $user='dev_rw';      //数据库连接用户名
        $pass='4VCK8lVM9qC';          //对应的密码
        $dsn="$dbms:host=$host;dbname=$dbName";
    }
}