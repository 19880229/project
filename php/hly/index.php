<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2017-09-29
 * Time: 13:43
 */
class You
{
    public $youMoney=1000;
    public function loan($number)
    {
        if($this->youMoney>=$number)
        {
            $this->youMoney=$this->youMoney-$number;
            echo "借给你 $number 元,我也不多了.<br>";
        }else
        {
            echo "我无法借你 $number 元,我没有那么多了<br>";
        }
    }
}
$you=new You();
$you->youMoney=$you->youMoney-5000;
echo "我现在只有".$you->youMoney;
echo "<br>钱去哪了.";
