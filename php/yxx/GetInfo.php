<?php
/**
 * Created by PhpStorm.
 * User: 贤贤
 * Date: 2017/9/28
 * Time: 13:12
 */
require __DIR__ . '/../db/DbHelper.php';
 final class GetInfo{

    public function get($seminarId){
          $mysql = $pdo = DbHelper::getPDO();
          $sql = <<<GOF
        select seminarId,tenantId,sceneName,status,name,createTime from searchSeminar where seminarId = :seminarId
GOF;
          $sth = $mysql->prepare($sql);
          $sth->bindValue('seminarId',$seminarId);
          $sth->execute();
          $result = $sth->fetchAll(PDO::FETCH_ASSOC);
          print_r($result);
    }
}

$dao = new GetInfo();
$dao->get(20);

