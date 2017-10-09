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


/*$dbms='mysql';     //数据库类型
$host='124.239.180.30'; //数据库主机名
$dbName='dev';    //使用的数据库
$user='dev_rw';      //数据库连接用户名
$pass='4VCK8lVM9qC';          //对应的密码
$dsn="$dbms:host=$host;dbname=$dbName";

try {
    $dbh = new PDO($dsn, $user, $pass); //初始化一个PDO对象
    echo "连接成功<br/>";
    //你还可以进行一次搜索操作
    foreach ($dbh->query('SELECT seminarId,tenantId,sceneName,status,name  FROM searchSeminar limit 0,10') as $row) {
        echo json_encode($row); //你可以用 echo($GLOBAL); 来看到这些值
    }

    $dbh = null;
} catch (PDOException $e) {
    die ("Error!: " . $e->getMessage() . "<br/>");
}*/

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

