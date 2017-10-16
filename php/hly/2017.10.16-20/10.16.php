<?php
/**
 * 常用字符串练习
 * User: HP
 * Date: 2017-10-16
 * Time: 13:48
 */
/*//1、strlen() 函数返回字符串的长度，以字符计。
//strlen() 常用于循环和其他函数，在确定字符串何时结束很重要时。

echo strlen("Hello world!") . "\n\r";

//2.lcfirst() 函数把字符串中的首字符转换为小写。

echo lcfirst("Hello world!") . "\n\r";

//ucfirst() 函数把字符串中的首字符转换为大写。

echo ucfirst("hello world!");

//3.ltrim() 函数移除字符串左侧的空白字符或其他预定义字符。

$t = "Good morning!";
echo $t . "\n\r";
echo ltrim($t, "Good") . "\n\r";

//rtrim() 函数移除字符串右侧的空白字符或其他预定义字符。
$z = "Hello world!";
echo $t . "\n\r";
echo rtrim($z, "world!") . "\n\r";

//trim() 函数移除字符串两侧的空白字符或其他预定义字符。
$x = "Good night";
echo trim($x, "Goht") . "\n\r";

//4.str_replace() 函数以其他字符替换字符串中的一些字符（区分大小写）。

echo str_replace("world", "Shanghai", "Hello world!") . "\n\r";

$arr = array("red", "blue", "green", "yellow");
print_r(str_replace("red", "pink", $arr, $i));
echo "替换数" . $i . "\n\r";

//str_ireplace() 函数替换字符串中的一些字符（不区分大小写）。
echo str_ireplace("WORLD", "Shanghai", "Hello world!") . "\n\r";

//5.str_split() 函数把字符串分割到数组中。

print_r(str_split("Shanghai"));

//语法：str_split(string,length)
print_r(str_split("Shanghai", 3));*/


//???6.strpos() 函数查找字符串在另一字符串中第一次出现的位置。注释：strpos() 函数对大小写敏感。

//语法：strpos(string,find,start)
echo strpos("I have a pen,I have a pen too!", "pen") . "\n\r";

//stripos() 函数查找字符串在另一字符串中第一次出现的位置（不区分大小写）。
echo stripos("You love php, I love php too!", "PHP") . "\n\r";

//strrpos() 函数查找字符串在另一字符串中最后一次出现的位置。
echo strrpos("This is an apple , There is an apple!", "apple") . "\n\r";


//???7.strstr() 函数搜索字符串在另一字符串中的第一次出现。

//语法：strstr(string,search,before_search)
//查找 "Shanghai" 在 "I love Shanghai!" 中的第一次出现，并返回(???字符串的剩余部分)：
echo strstr("I love Shanghai!","Shanghai"). "\n\r";


//stristr() 函数搜索字符串在另一字符串中的第一次出现。(不区分大小写)
echo stristr("Hello world!","WORLD"). "\n\r";


/*//8.strtolower() 函数把所有字符串转换为小写。

//语法：strtolower(string)
echo strtolower("HELLO WORLD!"). "\n\r";

//strtoupper() 函数把字符串转换为大写。
echo strtoupper("hello world!"). "\n\r";


//9.substr() 函数返回字符串的一部分。注释：如果 start 参数是负数且 length 小于或等于 start，则 length 为 0。

//语法:substr(string,start,length)
echo substr("Hello world",6). "\n\r";*/



//数组练习
//1.索引数组
$fruits=array("apple","banana","orange");
echo "I like " . $fruits[0] . ", " . $fruits[1] . " and " . $fruits[2] . "."."\n\r";

//2.关联数组
$age = array("Bill" => "23", "Joe" => "15", "Peter" => 35);
echo "Peter is " . $age['Peter'] . " years old." . "\n\r";

//3.多维数组
$fruits = ["水果" => ["瓜类" => ["西瓜" => "水瓜"]]];
foreach ($fruits as $p) {
    foreach ($p as $m) {
        foreach ($m as $k) {
            echo $k;
        }
    }
}
