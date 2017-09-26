<?php
$x=5;
$y=6;
$z=$x+$y;
echo $z."\r\n";
$peoples = ["zhangsan", "lisi"];

function calculate() {
    $peoples = ["zhangsan", "lisi"];
    if (empty($peoples)) {
        echo "数据为空";
    } else {
        foreach ($peoples as $item) {
            echo $item."\r\n";
        }
    }
}
calculate();