<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2017-09-29i
 * Time: 11:55
 */
require_once ('dog.php');
$myDog=new Dog();
$myDog->setWeight(20);
echo "狗的体重是".$myDog->getWeight().'<br>';
$myDog->Bark();
