<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2017-09-29
 * Time: 11:56
 */
require_once ('animal.php');
class Dog extends Animal
{
    /**

     *子类新增方法
     */
    public function Bark()
    {
        echo "Wang...Wang..";
    }
}
