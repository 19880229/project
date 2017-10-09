<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2017-10-09
 * Time: 10:19
 */

require __DIR__ . '/../db/DbHelper.php';
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
$dao->get(20);

