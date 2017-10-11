<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 2017-09-29
 * Time: 13:43
 */
/*class A
{
    private $a=0;
    public function  __construct()
    {
        $this->a=$this->a+1;
    }
    public function doSomeThing(){
        $this->__construct();
        return $this->a;
    }
}
$a=new A();
echo "现在 \$a 的值是".$a->doSomeThing();*/

/*class User{
    private $age;
    private $sal;
    private $payoff;//声明全局属性

    //构造函数中创建Payoff的对象
    public function __construct()
    {
        $this->payoff=new Payoff();
    }
    public function getAge(){
        return $this->age;
    }
    public function setAge($age){
        return $this->age=$age;
    }
    //获得工资
    public function getSal(){
        return $this->sal=$this->payoff->figure($this);
        return $this->sal;
    }
}
//对应工资与年龄关系的类
class Payoff{
    public function figure($a){
        $sal=0;
        $age =$a->getAge();
        if($age>80 || $age<16){
            $sal=0;
        }elseif ($age=50){
            $sal=1000;
        }else{
            $sal=800;
        }
        return $sal;
    }
}
//实例化User
$user=new User();
$user->setAge(55);
echo $user->getAge()."age,his sal is ".$user->getSal();
echo "<br>";
$user->setAge(20);
echo $user->getAge()."age,his sal is ".$user->getSal();
echo "<br>";
$user->setAge(-20);
echo $user->getAge()."age,his sal is ".$user->getSal();
echo "<br>";
$user->setAge(150);
echo $user->getAge()."age,his sal is ".$user->getSal();*/

/*class employee{
    protected $sal=3000;
    public function getSal(){
        $this->sal=$this->sal+1200;
        return $this->sal;
    }
}
class Manager extends employee{
    public function getSal()
    {
        parent::getSal();
        $this->sal=$this->sal+1500;
        return $this->sal;
    }
}
$emp=new employee();
echo "普通员工的工资是".$emp->getSal();
echo "<br>";
$manager=new Manager();
echo "经理的工资是:".$manager->getSal();*/

/*class Math{
    public function Max($a,$b)
    {
        return $a>$b?$a:$b;
    }
}
$math=new Math();
echo "最大值是",$math->Max(99,100,100,100);*/

/*class user{
    private static $count = 0;  //记录所有用户的登录情况.
    public function __construct()
    {
        self::$count=self::$count+1;
    }
    public function getCount(){
        return self::$count;
    }
    public function __destruct()
    {
        self::$count=self::$count-1;
    }
}
$user1=new user();
$user2=new user();
$user3=new user();
echo "now here have".$user1->getCount()."user";
echo "<br>";
unset($user3);
echo "now here have".$user1->getCount()."user";*/

/*class dog{
    protected  $eyeNumber=2;//属性
    //返回封装属性的方法.
    public function getEyeNumber(){
      return $this->eyeNumber;
    }
    public function bake(){
        return " bake wang...wang";
    }
    public function run(){
        return "dog can run";
}
}
$dog=new Dog();
echo "dog have".$dog->getEyeNumber()."eye.<br>";
echo "dog can".$dog->bake()."<br>".$dog->run();
echo "<br><br>";
class myDog extends dog{
    private $name='狗狗';
    public function getName(){
        return $this->name;
    }
    public function yaff(){
        return $this->name."yaff, heng....heng...";
    }

}
$myDog=new myDog();
echo $myDog->getName()."have".$myDog->getEyeNumber()."eye.<br>";
echo $myDog->yaff()."<br>".$myDog->run();*/
class Student{
    protected $grade;
    public function getGrade(){
        return $this->grade;
    }
    public function setGrade($_grade){
        $this->setGrade($_grade);
    }

}
interface User{
    function getName();
    function setName($_name);
}
//只有管理员可以设置公告
interface  Administrator{
    function setBulletin($_bulletin);
}
class StudentAdmin extends Student implements  User,Administrator{
     function getGrade()
     {
         return $this->grade;
     }
     function setGrade($_grade)
     {
        $this->grade=$_grade;
     }

    function getName(){
      return  $this->name;
    }
    function setName($_name){
        $this->name = $_name;
    }
    function setBulletin($_bulletin){
        $this->setBulletin=$_bulletin;
    }
}
$s=new StudentAdmin();
$s->setName("tom");
echo "名字是".$s->getName();
echo "<br>";
$s->setGrade(99);
echo "分数是". $s->getGrade();
echo "<br>";
echo "输出".$s->setBulletin("公告内容");
