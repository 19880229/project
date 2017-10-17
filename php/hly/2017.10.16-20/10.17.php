<?php
/**
 * 常用数组方法练习
 * User: HP
 * Date: 2017-10-17
 * Time: 8:59
 */


//1.sort() 函数对索引数组进行升序排序。
$colors = array("red", "green", "blue", "pink");
sort($colors);
$t = count($colors);
for ($x = 0; $x < $t; $x++) {
    echo $colors[$x] . "\n\r";
}

//rsort() 函数对数值数组进行降序排序。
$numbers = array(4, 5, 7, 9, 1);
rsort($numbers);
$w = count($numbers);
for ($a = 0; $a < $w; $a++) {
    echo $numbers[$a]."\n\r";
}


//2.asort() 函数对关联数组按照键值进行升序排序。
$age = array("Bill"=>"25", "Jone"=>"28", "Mark"=>"14");
asort($age);
foreach ($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value . "\n\r";
}

//arsort() 函数对关联数组按照键值进行降序排序。
$age = array("Bill"=>"25", "Jone"=>"18", "Mark"=>"38");
arsort($age);
foreach ($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value . "\n\r";
}


//3.ksort() 函数对关联数组按照键名进行升序排序。(26个字母的顺序升序)
$age = array("Tann"=>"15", "Jone"=>"24", "Mark"=>"26");
ksort($age);
foreach ($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value . "\n\r";
}

//krsort() 函数对关联数组按照键名进行降序排序。(26个字母的顺序降序)
$age = array("Bill"=>"48", "Jone"=>"33", "Mark"=>"25");
krsort($age);
foreach ($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value . "\n\r";
}


//4.array_chunk() 函数把数组分割为新的"数组块"。
//语法：array_chunk(array,size,preserve_key);
$colors=array("pink","black","blue","green");
print_r(array_chunk($colors,2));


//5.array_flip() 函数用于反转/交换数组中所有的键名以及它们关联的键值。
//语法：array_flip(array);
$z=array("1"=>"black","2"=>"red",3=>"green");
$result=array_flip($z);
print_r($result);


//??6.array_keys() 函数返回包含数组中所有键名的一个新数组。
//false - 默认值。不依赖类型，数字 5 与字符串 "5" 是相同的。
$a=array(10,20,30,"10");
print_r(array_keys($a,"10",false));

//true - 返回带有指定键值的键名。依赖类型，数字 5 与字符串 "5" 是不同的。
$a=array(10,20,30,"10");
print_r(array_keys($a,"10",true));


//7.array_values() 函数返回一个包含给定数组中所有键值的数组，但不保留键名。
$x=array("Name"=>"Bill","age"=>"22","country"=>"China");
print_r(array_values($x));


//8.array_splice() 函数从数组中移除选定的元素，并用新元素取代它。该函数也将返回包含被移除元素的数组。
//语法：array_splice(array,start,length,array)
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"black");
$a2=array("a"=>"purple","b"=>"orange");
array_splice($a1,0,2,$a2);
print_r($a1);


//9.array_slice() 函数在数组中根据条件取出一段值，并返回。
//语法：array_slice(array,start,length,preserve)
$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,2));


//10.array_shift() 函数删除数组中第一个元素，并返回被删除元素的值。
$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_shift($a)."\n\r";
print_r ($a);

//array_unshift() 函数用于向数组插入新元素。新数组的值将被插入到数组的开头。
$a=array("a"=>"red","b"=>"blue");
array_unshift($a,"orange");
print_r($a);


//11.array_reverse() 函数以相反的元素顺序返回数组。
$a=array("a"=>"apple","b"=>"orange","c"=>"banana");
print_r(array_reverse($a));


//12.array_unique() 函数移除数组中的重复的值，并返回结果数组,当几个数组元素的值相等时，只保留第一个元素，其他的元素被删除。
$a=array("a"=>"red","b"=>"green","c"=>"red");
print_r(array_unique($a));

//13.count() 函数返回数组中元素的数目。语法：count(array,mode);
$s=array("tree","grass","flower");
echo count($s)."\n\r";


//14.in_array() 函数搜索数组中是否存在指定的值。语法：in_array(search,array,type)
$people=array("zhangsan","lisi","wangwu","zhaoliu");
if(in_array("lisi",$people)){
    echo "名字已找到"."\n\r";
}else{
    echo "名字不存在！"."\n\r";
}


//15.array_search() 函数在数组中搜索某个键值，并返回对应的键名。array_search(value,array,strict)
$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_search("red",$a)."\n\r";


//16.array_push() 函数向第一个参数的数组尾部添加一个或多个元素（入栈），然后返回新数组的长度。
//该函数等于多次调用 $array[] = $value。语法：array_push(array,value1,value2...)
$a=array("red","green");
array_push($a,"blue","yellow");
print_r($a);


//17.array_merge() 函数把一个或多个数组合并为一个数组。
$a=array("red","yellow");
$a1=array("apple","banana");
print_r(array_merge($a,$a1));


//18.array_key_exists() 函数检查某个数组中是否存在指定的键名，如果键名存在则返回 true，如果键名不存在则返回 false。
//语法：array_key_exists(key,array)
$a=array("red"=>"apple","yellow"=>"banana");
if(array_key_exists("red",$a)){
    echo "存在！"."\n\r";
}else{
    echo "不存在!"."\n\r";
}


//19.array_diff() 函数返回两个数组的差集数组。该数组包括了所有在被比较的数组中，但是不在任何其他参数数组中的键值。
//语法：array_diff(array1,array2,array3...);
$a=array("red"=>"tomato","yellow"=>"lemon","green"=>"pear");
$a1=array("red"=>"tomato","yellow"=>"lemon");
print_r(array_diff($a,$a1));
